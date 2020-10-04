<?php
namespace Source\App\Utils;

use Monolog\Logger;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\TelegramBotHandler;


class Logs
{
    /**
  * Logs do sistema
  */
  private $logger;

  /**
   * Class constructor.
   */
  public function __construct()
  {
    $this->logger = new Logger('contato');
    $this->logger->pushProcessor(function ($record)
    {
      $record["extra"]["HTTP_HOST"] = $_SERVER["HTTP_HOST"];
      $record["extra"]["REQUEST_URI"] = $_SERVER["REQUEST_URI"];
      $record["extra"]["REQUEST_METHOD"] = $_SERVER["REQUEST_METHOD"];
      $record["extra"]["HTTP_USER_AGENT"] = $_SERVER["HTTP_USER_AGENT"];
      return $record;
    });
  }

  public function telegram($mensagem) {
// Handler para o telegram
// Criar bot na api do telegram
$tele_key = "1339299608:AAHtPXXEh4nqdlDbdhKfasSw8RtfYULn9mo";
// ID pego na Classe TelegramBotHandler dando um var_dump no $result
$tele_channel = "-1001264785539";
// Setar a classe do telegram
$tele_handler = new TelegramBotHandler(
    // API key
    $tele_key,
    // Channel
    $tele_channel,
    // Level
    Logger::INFO
  );

  $tele_handler->setFormatter( new LineFormatter("%level_name%: %message%"));
  $this->logger->pushHandler($tele_handler);
  $this->logger->info( '|Nome do cliente: '. $mensagem['name'] . 
  '|Telefone: ' . $mensagem['telefone'] . 
  '|Email: ' . $mensagem['email'] .
  '|assunto: ' . $mensagem['assunto'] .
  '|Mensagem: ' . $mensagem['mensagem']
  , ['info' => true] );

  }

}