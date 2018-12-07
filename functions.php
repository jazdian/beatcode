<?php

function beatcode_styles()
{

    // Registrar los estilos
    wp_register_style("bootstrap", get_template_directory_uri() . "/css/bootstrap.min.css", array(), "4.0");
    wp_register_style("normalize", get_template_directory_uri() . "/css/normalize.css", array(), "8.0.1");
    wp_register_style("style", get_template_directory_uri() . "/style.css", array("bootstrap"), "1.0");

    // Cargar los estilos
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('style');

}

add_action('wp_enqueue_scripts', 'beatcode_styles'); 

