<?php
namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
  /**
   * Class constructor.
   */
  public function __construct()
  {
    parent::__construct("users", ["name", "email"]);
  }
}
