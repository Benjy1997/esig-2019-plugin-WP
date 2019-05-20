<?php
/*
Plugin Name: Mon plugin ico
*/


function mon_plugin_ico_shortcode($atts, $content){
    $imgDir = get_site_url().'/wp-content/plugins/ico-plugin/img/';
    $imgPath = $imgDir.$content;


    $color = 'red';
    $padding = '9px';
    $radius = '100%';

    if (isset($atts['color'])){
        $color = $atts['color'];
    }

    if (isset($atts['padding'])){
        $padding = $atts['padding'];
    }

    if (isset($atts['radius'])){
        $radius = $atts['radius'];
    }

    $html = '<img style="background-color:'.$color.'; padding:'.$padding.'; border-radius:'.$radius.';"'
          .'src="'.$imgPath.'" alt="wordpress" /%gt;';
}


