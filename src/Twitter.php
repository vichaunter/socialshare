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

class Twitter extends SocialShare implements IProvider {
    
    public function __construct() {
        $this->provider = new Provider('twitter', 'http://www.twitter.com/share');
    }
    
    public function addShareUrl( $url ) {
        $this->addUrlAttribute('url', $url);
    }
    
    public function addTweetText( $text ) {
        $this->provider->addAttribute('text', $text);
    }
    
}