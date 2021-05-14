<?php

namespace Source\App;

use Source\Models\Post;
use Source\Models\Admin;
use League\Plates\Engine;
use Source\Support\JWTSecure;
use Source\Support\ValidarDados\Validacao;
use Source\Support\ValidarDados\Sanitarizacao;

class Dashboard
 {
    /**
    * @var Engine
    */
    private $view;
    /**
    * @var Post
    */
    private $post;
    /**
    * @var Admin
    */
    private $admin;
    /**
    * @var Sanitarizacao
    */
    private $sanit;
    /**
    * @var Validacao
    */
    private $validacao;
    /**
    * @var JWTSecure
    */
    private $JWT;

    public function __construct()
 {
        $this->post = new Post();
        $this->view = Engine::create( __DIR__.'/../../theme/admin', 'php' );
        $this->admin = new Admin();
        $this->sanit = new Sanitarizacao();
        $this->validacao = new Validacao();
        $this->JWT = new JWTSecure();
    }

    /**
    * Pagina de Login
    */

    public function login():void
 {
        echo $this->view->render( 'login', [

        ] );
    }
    /**
    * Autorização
    */

    public function autorizar( $data ):void
 {

        try {
            $datas = json_decode( file_get_contents( 'php://input', true ) );

            $email = filter_var( $datas->email, FILTER_VALIDATE_EMAIL );
            $senha = filter_var( $datas->senha );

            $email = $this->sanit->email( $email );
            $senha = $this->sanit->tornarSeguro( $senha );

            $user = $this->admin->find( 'email = :email AND senha = :senha', 'email=' . $email . '&senha=' . $senha )->fetch();
  
            if ( $user->fail() != null ) {
                echo "error no teste";
            } else {
                $dadosUser = $user->data();

                $Aut = $this->JWT->autenticar( $dadosUser->email, $dadosUser->name, $dadosUser->cargo, $dadosUser->id );

                $result = ['Authorization' => " Bearer ${Aut}", 'locale' => url( '/dashboard/home' ), 'success' => true];
                $result = json_encode( $result );
                $_SESSION['Authorization'] = 'Bearer '. $Aut;
                echo $result ;

            }
        } catch ( \Throwable $th ) {
            $resposta = ["success" => false, "mensagem" => "error"] ;
            echo json_encode($resposta);
        }
    }
    /**
    * dashboard
    */

    public function dashboard():void
 {
        if ( ( !isset( $_SESSION['Authorization'] ) == true ) and ( !isset( $_SESSION['Authorization'] ) == true ) )
 {
            unset( $_SESSION['Authorization'] );
            header( 'location:' . url( '/dashboard' ) );
        } else {

            $valid = $this->JWT->find( $_SESSION );

            if ( $valid ) {
                $infoUser = $this->JWT->pegarInfo( $_SESSION );
                echo $this->view->render( 'home', [
                    'info' => $infoUser

                ] );
            } else {
                header( 'Location: ' . url( '/dashboard' ) );
            }

        }
    }
    /**
    * Escrever Artigo para o blog
    */

    public function composeBlog():void
 {

        if ( ( !isset( $_SESSION['Authorization'] ) == true ) and ( !isset( $_SESSION['Authorization'] ) == true ) ) {
            unset( $_SESSION['Authorization'] );
            header( 'location:' . url( '/dashboard' ) );
        } else {

            $valid = $this->JWT->find( $_SESSION );

            if ( $valid ) {
                $infoUser = $this->JWT->pegarInfo( $_SESSION );
                echo $this->view->render( 'composeBlog', [
                    'info' => $infoUser

                ] );
            } else {
                header( 'Location: ' . url( '/dashboard' ) );
            }
        }
    }

    public function listblog():void
 {

        if ( ( !isset( $_SESSION['Authorization'] ) == true ) and ( !isset( $_SESSION['Authorization'] ) == true ) ) {
            unset( $_SESSION['Authorization'] );
            header( 'location:' . url( '/dashboard' ) );
        } else {

            $valid = $this->JWT->find( $_SESSION );

            if ( $valid ) {
                $posts = $this->post->find()->limit( 10 )->offset( 0 )->fetch( true );
                $quantidadePosts = $this->post->find()->count();
                $infoUser = $this->JWT->pegarInfo( $_SESSION );
                echo $this->view->render( 'listBlog', [
                    'info' => $infoUser,
                    'posts' => $posts,
                    'Quantidade' => $quantidadePosts
                ] );
            } else {
                header( 'Location: ' . url( '/dashboard' ) );
            }
        }
    }
    public function alterarPost($data):void
    {
        if ( ( !isset( $_SESSION['Authorization'] ) == true ) and ( !isset( $_SESSION['Authorization'] ) == true ) ) {
            unset( $_SESSION['Authorization'] );
            header( 'location:' . url( '/dashboard' ) );
        } else {
            $idSeguro = $this->sanit->tornarSeguro( $data["id"] );
    
            $post = $this->post->findById( $idSeguro );
           
            $infoUser = $this->JWT->pegarInfo( $_SESSION );
            echo $this->view->render( 'composeBlog', [
                'info' => $infoUser,
                'post' => $post->data
               
            ] );
        }
       
  
    }
    /**
    * Rota para salvar o com method post
    */

    public function savePost():void
 {
        if ( ( !isset( $_SESSION['Authorization'] ) == true ) and ( !isset( $_SESSION['Authorization'] ) == true ) ) {
            unset( $_SESSION['Authorization'] );
            header( 'location:' . url( '/dashboard' ) );
        } else {
            $valid = $this->JWT->find( $_SESSION );
            if ( $valid ) {
                try {
                    $datas = json_decode( file_get_contents( 'php://input', true ) );
                    foreach ( $datas as $key => $data ) {
                        if ( $key === 'titulo' || $key === 'descricao'  || $key === 'id') {
                            $dat[$key] = filter_var( $data, FILTER_SANITIZE_STRING );
                        }
                        if ( $key === 'conteudo' ) {
                            $dat[$key] =  $data ;
                        }
                    }
                    if ( $dat['titulo'] != '' && $dat['descricao'] != '' && $dat['conteudo'] != '' ) {
                        if(isset( $dat['id'])){
                            $verificaExistencia = $this->post->find("id = :id ", "id=".$dat['id']  )->fetch();
                         };
                      
                        if (isset($verificaExistencia) != null){
                        $verificaExistencia->title = $dat['titulo'];
                        $verificaExistencia->description = $dat['descricao'];
                        $verificaExistencia->body = $dat['conteudo'];
                        if(isset( $dat['cover'])){
                           $verificaExistencia->cover = $dat['cover'];
                        };
                        
                       
                        if ( $verificaExistencia->save() ) {
                            $response = ["success" => true, "mensagem" => "Post atualizado com sucesso!"];
                            echo json_encode($response);
                        }
                        } else {
                        $this->post->title = $dat['titulo'];
                        $this->post->description = $dat['descricao'];
                        $this->post->body = $dat['conteudo'];
                        if(isset( $dat['cover'])){
                            $this->post->cover = $dat['cover'];
                        };
                        $this->post->save();
                        if ( $this->post->save() ) {
                            $response = ["success" => true, "mensagem" => "Novo post salvo com sucesso!"];
                            echo json_encode($response);
                        }
                        }
                        
                    } else {
                        echo 'Algum campo esta inválido';
                    }

                } catch ( \Throwable $th ) {
                    echo 'nao foi possivel executar a ação';
                }
            } else {
                echo 'Token inválido';
            }

        }
    }

    public function deletePost()
 {
        if ( ( !isset( $_SESSION['Authorization'] ) == true ) and ( !isset( $_SESSION['Authorization'] ) == true ) ) {
            unset( $_SESSION['Authorization'] );
            header( 'location:' . url( '/dashboard' ) );
        } else {
            $valid = $this->JWT->find( $_SESSION );
            if ( $valid ) {
                try {
                    $data = json_decode( file_get_contents( 'php://input', true ) );
                    $dat = filter_var( $data, FILTER_SANITIZE_STRIPPED );
                    $dat = intval( $dat );
                    $post = $this->post->findById( $dat );
                    if( $post->destroy()){
                        $response = ["success" => true, "mensagem" => "Post excluido com sucesso!"];
                       
                        echo json_encode($response);
                    }
                   
                    
                    
                } catch ( \Throwable $th ) {
                    echo "Não foi possivel excluir este post" ;
                }
            } else {
                echo 'Token inválido';
            }

        }
    }

    public function logout():void
    {
        unset( $_SESSION['Authorization'] );
        $alert = ['status' => 'Deslogado com sucesso'];
        echo json_encode( $alert );
    }

}