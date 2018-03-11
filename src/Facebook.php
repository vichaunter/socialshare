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
use VicHaunter\SocialShare\Traits\TIcons;

class Facebook extends SocialShare implements IProvider {
    
    public function __construct() {
        $this->provider = new Provider('facebook', 'https://www.facebook.com/sharer/sharer.php');
    }
    
    public function addShareUrl( $url ) {
        $this->addUrlAttribute('u', $url);
    }
    
}