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
    /**
   * Class constructor.
   */
    public function __construct()
    {
        $this->data = new ValidationData();
        $this->id = "teste";
        $this->signer = new Sha256();
    }

    public function autenticar($email, $nome, $cargo, $id)
    {
        
        $now = time();
        $this->token = (new Builder())
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
                    ->expiresAt($now + ((60* 60)*16))
                    // Configures a new claim, called "uid"
                    ->withClaim('uid', $id)
                    ->withClaim('email', $email)
                    ->withClaim('nome', $nome)
                    ->withClaim('cargo', $cargo)
                    
                    // Builds a new token
                    ->getToken($this->signer, new Key(KEY));

        return  $this->token ;
    }
    public function find($headers)
    {
        $auth = $headers['Authorization'];
    
        if (preg_match('/Bearer\s(\S+)/', $auth, $matches)) {
            // transforma o JWT em Token
            $parse = (new Parser())->parse((string) $matches[1]);
            // verificar se este jwt foi feito com a chave e alghoritmo de cripto do servidor
            if($parse->verify($this->signer, KEY )){
            
                $this->data->setIssuer(url());
                $this->data->setAudience('admin');
                $this->data->setId($this->id);
                // verificar se existe estas informaçoes no token
               return $parse->validate($this->data);
                
                
            }else{
                return "nope";
            }
        } else {
            return "nope";
        }
    }
    public function pegarInfo($headers)
    {
        $auth = $headers['Authorization'];
    
        if (preg_match('/Bearer\s(\S+)/', $auth, $matches)) {
            // transforma o JWT em Token
            $parse = (new Parser())->parse((string) $matches[1]);
            // verificar se este jwt foi feito com a chave e alghoritmo de cripto do servidor
            return $parse->getClaims();
        } else {
            return "nope";
        }
    }
}
