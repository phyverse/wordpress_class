<?php
  // Register Nav Walker class_alias
  require_once('wp_bootstrap_navwalker.php');

  // Theme Support
  function wpb_theme_setup(){
  
    add_theme_support('post-thumbnails');
    // Nav Menus
    register_nav_menus(array(
      'primary' => __('Main')
    ));
   
      
 
  }

  add_action('after_setup_theme','wpb_theme_setup');

  function set_excerpt_length(){
    return 20;
    add_filter('excerpt_length','set_excerpt_length');
  } 

?>
