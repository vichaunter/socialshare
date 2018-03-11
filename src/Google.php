<?php
/**
 * Created by PhpStorm.
 * User: vicha
 * Date: 11/03/2018
 * Time: 10:42
 */

namespace VicHaunter\SocialShare;

use VicHaunter\Lib\SocialShare\Provider;
use VicHaunter\SocialShare\Interfaces\IProvider;
use VicHaunter\SocialShare\Lib\SocialShare;

class Google extends SocialShare implements IProvider {
    
    public function __construct() {
        
        $this->provider = new Provider('google', 'https://plus.google.com/share');
    }
    
    public function addShareUrl( $url ) {
        $this->addUrlAttribute('url', $url);
    }
    
}