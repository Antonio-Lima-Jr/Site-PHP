<?php
namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Post extends DataLayer
{
  /**
   * Class constructor.
   */
  public function __construct()
  {
    parent::__construct('posts', ["title", "description", "body"]);
  }
}
