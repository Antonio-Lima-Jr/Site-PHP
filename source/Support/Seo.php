<?php

namespace Source\Support;
use CoffeeCode\Optimizer\Optimizer;

class Seo
{
  protected $optmizer;

  /**
   * Class constructor.
   */
  public function __construct(string $schema = "article")
  {
    $this->optmizer = new Optimizer();
    $this->optmizer->openGraph(
      SITE,
      "pt-br",
      $schema
    )->publisher(
      "zuc.dev.9",
      "100009589531524"
    )->twitterCard(
      // Usuario do Twiter com @Antoniotwiter
      "@zucdeveloper",
      // Criador do artigo com @zucdeveloper
      "@zucdeveloper",
      // link do site
      "zucdeveloper.com"
    )->facebook(
      // App ID
      "910266119468920",
      // ADMINS com os autores ----  para isso deve setar o primeiro parametro para NULL
      // [
      //   100009589531524,
      //   100009589531524,
      //   100009589531524
      // ]

    );
  }
  public function render(string $title, string $description, string $url, string $image, bool $follow = true):string
  {
      $seo = $this->optmizer->optimize($title, $description, $url, $image, $follow);
      return $seo->render();
  }
}


