<?php

namespace Source\App;
use Source\Models\User;
use Source\App\Utils\Logs;

class Form
{

  /**
   * Banco de dados
   */
  private $use;
  /**
   * MONOLOG
   */
  private $loger;
  /**
   * Class constructor.
   */
  public function __construct()
  {
    $this->use = new User();
    $this->loger = new Logs();

  }  

  public function client($data)
  { 
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRIPPED);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
  $assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRIPPED);
  $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRIPPED);

  $this->use->name = $name;
  $this->use->email = $email;
  $this->use->telefone = $telefone;
  $this->use->assunto = $assunto;
  $this->use->mensagem = $mensagem;
 

  if ($name != '' && $email != '' && $telefone != '' && $assunto != '' && $mensagem != '' ) {
    $this->use->save();
    $templateTelegram = [
      "name" => $name,
      "email" => $email,
      "telefone" => $telefone,
      "assunto" => $assunto,
      "mensagem" => $mensagem,
      ];
      $this->loger->telegram($templateTelegram);
      echo true;
  } else {
    echo false;
  }

  }
}

// 
