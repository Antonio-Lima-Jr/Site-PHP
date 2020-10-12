<?php
namespace Source\Support;

use Lcobucci\JWT\Parser;
use Lcobucci\JWT\Builder;
use Lcobucci\JWT\Signer\Key;
use Lcobucci\JWT\ValidationData;
use Lcobucci\JWT\Signer\Hmac\Sha256;

class JWTSecure  
{

  /**
   * Algoritimo
   */
  private $signer;
  /**
   * TOKEN
   */
  private $token;
  /**
   * Class constructor.
   */
  /**
   * Parser
   */
  private $parser;
  /**
   * Validate
   */
  private $data;
  /**
   * ID
   */
  private $id;
  public function __construct()
  {
    $this->data = new ValidationData();
    $this->id = "teste";
    
  }

  public function autenticar($email, $nome, $cargo, $id)
  {

    $signer = new Sha256();
    $now = time();
    $this->token = (new Builder ())
                    // Configures the issuer (iss claim)
                    // Nome da API que gerou este Token
                    ->issuedBy(url())
                    // Configures the audience (aud claim)
                    // Audiencia para separ em niveis as autenticações
                    ->permittedFor("admin")
                    // Configures the id (jti claim)
                    ->identifiedBy($this->id)
                    // Configures the time that the token was issue (iat claim)
                    ->issuedAt($now)
                    // Configures the time that the token can be used (nbf claim)
                    ->canOnlyBeUsedAfter($now)
                    // Configures the expiration time of the token (exp claim)
                    ->expiresAt($now + 60)
                    // Configures a new claim, called "uid"
                    ->withClaim('uid', $id)
                    ->withClaim('email', $email)
                    ->withClaim('nome', $nome)
                    ->withClaim('cargo', $cargo)
                    
                    // Builds a new token
                    ->getToken($signer, new Key(KEY));

    return  $this->token ;
  }
  public function find($headers){
    $auth = $headers['Authorization'];
    
    if (preg_match('/Bearer\s(\S+)/', $auth, $matches)) {
        $parse = (new Parser())->parse((string) $matches[1]);
        
        $this->data->setIssuer(url());
        $this->data->setAudience('admin');
        $this->data->setId($this->id);
        
    
      

        return $parse->validate($this->data);
    }else{
        echo 'nope';
    }
  }

}
