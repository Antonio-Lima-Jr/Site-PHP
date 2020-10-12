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
    $this->view = Engine::create(__DIR__."/../../theme/admin", "php");
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
    echo $this->view->render("login", [
      
    ]);
  }
  /**
   * Autorização
   */
  public function autorizar($data):void
  {


    try {
    $datas = json_decode(file_get_contents('php://input', true));
    
    $email = filter_var($datas->email, FILTER_VALIDATE_EMAIL);
    $senha = filter_var($datas->senha);

    $email = $this->sanit->email( $email);
    $senha = $this->sanit->tornarSeguro($senha);

    $user = $this->admin->find("email = :email AND senha = :senha", 'email=' . $email . '&senha=' . $senha)->fetch();
    if($user->fail()){
      echo $user->fail()->getMessage();
    } else {
      $dadosUser = $user->data();
      
      $Aut = $this->JWT->autenticar($dadosUser->email , $dadosUser->name , $dadosUser->cargo , $dadosUser->id);
   
      $result = ["Authorization" => " Bearer ${Aut}", "locale" => url("/login/dashboard")];
      $result = json_encode($result);
      $_SESSION["Authorization"] = "Bearer ". $Aut;
      echo $result ;

    }
    } catch (\Throwable $th) {
      echo $th;
    }




  }
  /**
   * dashboard
   */
  public function dashboard():void
  {
    if((!isset($_SESSION['Authorization']) == true) and (!isset($_SESSION['Authorization']) == true))
{
  unset($_SESSION['Authorization']);
  header('location:' . url("/login"));
  } else {

    
    $valid = $this->JWT->find($_SESSION);
    if ($valid) {
      echo var_dump($valid);
      echo $this->view->render("home", [
        
        ]);
    }else{
      header("Location: " . url("/login"));
    }


 
  }
  }
  /**
  * Escrever Artigo para o blog
  */
  public function composeBlog():void
  {

    if((!isset($_SESSION['Authorization']) == true) and (!isset($_SESSION['Authorization']) == true))
    {
      unset($_SESSION['login']);
      unset($_SESSION['senha']);
      header('location:' . url("/login"));
      
    } else {

      $valid = $this->JWT->find($_SESSION);
      if ($valid) {
        echo var_dump($valid);
        echo $this->view->render("composeBlog", [
      
          ]);
      }else{
        header("Location: " . url("/login"));
      }
    }
  }
    
  /**
   * Rota para salvar o post
  */
  public function savePost():void
  {
    
    if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true))
    {
      unset($_SESSION['login']);
      unset($_SESSION['senha']);
      header('location:' . url("/login"));
      
    } else {
      try {
        $datas = json_decode(file_get_contents('php://input', true));
        foreach ($datas as $key => $data) {
          if ($key === "titulo" && $key != "" || $key === "descricao" && $key != "" || $key === "cover" && $key != "" ){
            $dat[$key] = filter_var($data, FILTER_SANITIZE_STRING );
          }
          if ($key === "conteudo" ){
            $dat[$key] = $data;
          }
        }
        if ( $dat['titulo'] != "" && $dat['descricao'] != "" && $dat['conteudo'] != "" && $dat['cover'] != "" ){
          $this->post->title = $dat['titulo'];
          $this->post->description = $dat['descricao'];
          $this->post->body = $dat['conteudo'];
          $this->post->cover = $dat['cover'];
          $this->post->save();
          if ( $this->post->save()){
          echo "salvo com sucesso!";
          }
        } else {
          echo "Algum campo esta inválido";
        }
    
  
      } catch (\Throwable $th) {
        echo "nao foi possivel salvas";
      }
    }
  }
}