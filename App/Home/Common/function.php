<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/4/25
 * Time: 0:58
 */
function replace_img($text){
    return preg_replace('/<img[^>]+>/',"",$text);
}