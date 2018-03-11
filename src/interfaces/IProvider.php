<?php
/**
 * Created by PhpStorm.
 * User: vicha
 * Date: 11/03/2018
 * Time: 10:37
 */

namespace VicHaunter\SocialShare\Interfaces;

interface IProvider {


    public function __construct();
    
    public function addShareUrl($url);
    
}