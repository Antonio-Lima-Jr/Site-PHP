<?php

namespace Source\App;

use Source\Models\Post;
use Source\Support\Seo;
use League\Plates\Engine;
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
    // listagem no Banco de dados
    $posts = $this->post->find()->fetch(true);
    // comparando URI com os titulos no banco de dados
    foreach ($posts as $post) {
      $urlTratamentoServer = str_replace('.', '', $post->title);
      $urlTratamentoServer = str_replace(' ', '-', $urlTratamentoServer);
      if ($data['titulo'] == $urlTratamentoServer){
        $head = $this->seo->render(
          // titulo
          "Blog | ". SITE . " " . $post->title,
          // descrição
          $post->description,
          // url
          url("/blog". "/" . $data["titulo"] ),
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
}