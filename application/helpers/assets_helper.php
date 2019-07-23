<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
*/

if(!defined('BASEPATH')) exit ('No direct script access allowed');
//url helper pour les fichiers css
if(!function_exists('css_url')){
    function css_url($nom){
        return base_url()."assets/css/".$nom.".css";
    }
}

//url helper pour les fichier javascript
if(!function_exists('js_url')){
    function js_url($nom){
        return base_url()."assets/javascript/".$nom.".js";
    }
}

//url helper pour les images
if(!function_exists('img_url')){
    function img_url($nom){
        return base_url()."assets/images/".$nom;
    }
}

//url pour les images
if(!function_exists('imgs')){
    function imgs($nom, $alt='', $height = 50, $width = 50){
        return "<img src=".img_url($nom)." alt=".$alt." height=".$height." width=".$width."/>";
    }
}
?>

