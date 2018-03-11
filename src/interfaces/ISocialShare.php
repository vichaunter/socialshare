<?php
/**
 * Created by PhpStorm.
 * User: vicha
 * Date: 11/03/2018
 * Time: 10:31
 */

namespace VicHaunter\SocialShare\Interfaces;

interface ISocialShare {
    
    public function getProvider();
    
    public function setShareButton($url, $counter = false);
    
}