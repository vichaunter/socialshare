<?php
/**
 * Created by PhpStorm.
 * User: vicha
 * Date: 11/03/2018
 * Time: 10:42
 */

namespace VicHaunter\SocialShare;

use VicHaunter\SocialShare\Interfaces\IProvider;
use VicHaunter\SocialShare\Lib\SocialShare;

class Tumblr extends SocialShare implements IProvider {
    
    public function addShareUrl( $url ) {
        $this->addUrlAttribute('url', $url);
    }
    
}