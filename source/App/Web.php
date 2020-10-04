<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Support\Seo;

class Web
{
  /**
   * @var Engine
   */
  private $view;
  /**
   * @var $seo Seo
   */
  private $seo;


  public function __construct()
  {
    
    $this->view = Engine::create(__DIR__."/../../theme", "php");
    $this->seo = new Seo();
  }
  public function home():void
  {
    $head = $this->seo->render(
      // titulo
      "Home | ". SITE,
      // descrição
      "ZucDeveloper desenvolvimento de sites com SEO otimizado, bonito e seguro para o seu negócio em PHP, Html5, Css3 e Javascript",
      // url
      url(),
      // image
      url("/theme/img/bannerSeo/BannerLogo.jpg")
    );

    echo $this->view->render("home", [
      "head" => $head
    ]);
  }

  public function contact():void
  {
    $head = $this->seo->render(
      // titulo
      "Contato | ". SITE,
      // descrição
      "ZucDeveloper desenvolvimento de sites otimizado, bonito e seguro para o seu negócio em PHP, Html5, Css3 e Javascript",
      // url
      url("contato"),
      // image
      url("/theme/img/bannerSeo/BannerLogo.jpg")
    );

    echo $this->view->render("contact", [
      "head" => $head
    ]);
  }

  public function sobre()
  {
    $head = $this->seo->render(
      // titulo
      "Sobre | ". SITE,
      // descrição
      "ZucDeveloper desenvolvimento de sites com SEO otimizado, bonito e seguro para o seu negócio em PHP, Html5, Css3 e Javascript",
      // url
      url(),
      // image
      url("/theme/img/bannerSeo/BannerLogo.jpg")
    );

    echo $this->view->render("sobre", [
      "head" => $head
    ]);
  }

public function portifolio()
{
  $head = $this->seo->render(
    // titulo
    "Contato | ". SITE,
    // descrição
    "ZucDeveloper desenvolvimento de sites com SEO otimizado, bonito e seguro para o seu negócio em PHP, Html5, Css3 e Javascript",
    // url
    url(),
    // image
    url("/theme/img/bannerSeo/BannerLogo.jpg")
  );

  echo $this->view->render("portfolio", [
    "head" => $head
  ]);
}
  public function error(array $data):void
  {

    $head = $this->seo->render(
      // titulo
      "Error {$data['errcode']} | ". SITE,
      // descrição
      "ZucDeveloper desenvolvimento de sites com SEO otimizado, bonito e seguro para o seu negócio em PHP, Html5, Css3 e Javascript",
      // url
      url("ooops/{{$data['errcode']}}"),
      // image
      url("/theme/img/bannerSeo/BannerLogo.jpg")
    );

    echo $this->view->render("error", [
      "head" => $head,
      "error" => $data["errcode"]
    ]);
  }
}