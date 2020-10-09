<?php

namespace Source\App;

use Source\Models\Post;
use Source\Support\Seo;
use League\Plates\Engine;
use Source\Models\Coment;
use Source\Support\DateFormat;

class Blog
{
  /**
   * Banco de dados
   */
  private $post;
  /**
   * view
   */
  private $view;
  /**
   * seo
   */
  private $seo;
  /**
   * Class constructor.
   */
  public function __construct()
  {
    $this->post = new Post();
    $this->view = Engine::create(__DIR__."/../../theme", "php");
    $this->seo = new Seo();
  }  

  public function home(){
    $head = $this->seo->render(
      // titulo
      "Blog | ". SITE . " desenvolvimento de sites com SEO otimizado, blogs e programação Web em geral ",
      // descrição
      "ZucDeveloper blog sobre a área de TI, desenvolvimento web, negócios, programação...",
      // url
      url('/blog'),
      // image
      url("/theme/img/bannerSeo/BannerLogo.jpg")
    );
    $posts = $this->post->find()->limit(10)->offset(0)->fetch(true);
    echo $this->view->render("blog", [
      "head" => $head,
      "posts" => $posts,
    ]);
  }

  public function article($data)
  {
    // limpar input de codigo malicioso
    $subPor1 = str_replace("-", "1", $data["titulo"]);
    $titulo = filter_var( $subPor1, FILTER_SANITIZE_STRIPPED);
    $inputClean = str_replace("1", "-",$titulo);
 
    // listagem no Banco de dados
    $posts = $this->post->find()->fetch(true);
    // comparando URI com os titulos no banco de dados
    foreach ($posts as $post) {
      $urlTratamentoServer = str_replace('.', '', $post->title);
      $urlTratamentoServer = str_replace(' ', '-', $urlTratamentoServer);
      if ($inputClean == $urlTratamentoServer){
        $head = $this->seo->render(
          // titulo
          "Blog | ". SITE . " " . $post->title,
          // descrição
          $post->description,
          // url
          url("/blog". "/" . $inputClean ),
          // image
          url($post->cover)
        );
        echo $this->view->render("article", [
          "head" => $head,
          "post" => $post,
          "posts" => $posts
        ]);
      }
    }
  }

  public function coments($data)
  {
    $inputs = filter_var_array($data, FILTER_SANITIZE_STRING);
    if (  in_array( "", $inputs ) ) {
      $callback["message"] = message("informe o nome e a mensagem", "error");
      echo json_encode($callback);
      return;
    }
    $coment = new Coment();
    $coment->name = $inputs["name"];
    $coment->comentario = $inputs["comentario"];
    $coment->title = $inputs["title"];
 
     if($coment->save()){
       echo 1;
     } else {
      echo 0;
     }
  }

  public function getComents($data)
  {
    $titleInput = filter_var($data["titulo"], FILTER_SANITIZE_STRING);
    


    $coments = new Coment();
    $listComent = $coments->find("title = :title", "title={$titleInput}")->fetch(true);
    $obj = [];
    foreach ($listComent as $key => $coment) {
      $obj[$key] = $coment->data;
    }
    echo json_encode($obj);
    
  }
}