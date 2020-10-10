<?php
namespace Source\Support;


class TratURI  
{
  private $result;
  /**
   * Class constructor.
   */
  public function __construct()
  {

  }

  static function getInputUri($data){
    $result = self::tirarAcentos( $data);
    $subPor1 = str_replace("-", "1", $result);
    $titulo = filter_var( $subPor1, FILTER_SANITIZE_STRIPPED);
    $result = str_replace("1", "-",$titulo);
    $result = mb_strtolower($result);


    return $result;
  }
  

  static function getDbUri($data){
    $urlTratamentoServer = self::tirarAcentos($data);
    $urlTratamentoServer = str_replace('.', '', $urlTratamentoServer);
    $urlTratamentoServer = str_replace(' ', '-', $urlTratamentoServer);
    $urlTratamentoServer = mb_strtolower($urlTratamentoServer);
    
    return $urlTratamentoServer;
  }

  function tirarAcentos($uri){
    $comAcento = ['à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ü', 'ú', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'O', 'Ù', 'Ü', 'Ú'];

    $semAcento = ['a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', '0', 'U', 'U', 'U'];

   return str_replace($comAcento, $semAcento, $uri);
  }

}
