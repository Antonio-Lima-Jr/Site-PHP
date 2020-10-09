<?php
namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;


class Coment extends DataLayer 
{
  /**
   * Class constructor.
   */
  public function __construct()
  {
    parent::__construct("coments", ["name", "comentario"]);
  }
}
