<?php

  /* Ajoute la feuille de style du thème parent */
  add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_styles' );
  function wpchild_enqueue_styles(){
    wp_enqueue_style( 'ns-theme-style', get_template_directory_uri() . 'style.css' );
  }