<?php
/*
Plugin Name: Mon plugin ico
*/


function mon_plugin_ico_shortcode($atts, $content){

    // Récupère le chemin vers l'image.
    $imgDir = get_site_url().'/wp-content/plugins/ico-plugin/img/';
    $imgPath = $imgDir.$content.'.png';

    // Initialise les attributs par défaut
    $color = 'black';
    $padding = '9px';
    $radius = '100%';

    // Modifie les attributs.
    if (isset($atts['color'])){
        $color = $atts['color'];
    }

    if (isset($atts['padding'])){
        $padding = $atts['padding'];
    }

    if (isset($atts['radius'])){
        $radius = $atts['radius'];
    }

    // Retourne le code HTML.
    return $html = '<img style="background-color:'.$color.'; padding:'.$padding.'; border-radius:'.$radius.';"'
          .'src="'.$imgPath.'" alt="wordpress" /%gt;>';
}

//Enregistre les shortcodes du plugin
function mon_plugin_ico_register_shortcode() {
    add_shortcode('ico','mon_plugin_ico_shortcode');
}

add_action( 'init', 'mon_plugin_ico_register_shortcode' );


