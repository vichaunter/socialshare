<?php
/**
 * Created by PhpStorm.
 * User: vicha
 * Date: 11/03/2018
 * Time: 10:45
 */

namespace VicHaunter\SocialShare\Lib;

class ProviderApi {
    
    private $publicKey;
    private $privateKey;
    
    public function setKeys($public, $private){
        $this->publicKey = $public;
        $this->privateKey = $private;
    }
    
    
}