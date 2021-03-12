<?php
/*
    Plugin Name: ShipCalm Components v2
    Description: Plugin for ShipCalm Components
    Version: 1.1
    Author: Reyjay Solares
*/

 function func_load_vuescripts() {
    wp_register_style('wpvue_vuecss', plugin_dir_url( __FILE__ ).'dist/css/app.css', true);
     wp_register_script('wpvue_vuejs', plugin_dir_url( __FILE__ ).'dist/js/app.js', true);
     wp_register_script('wpvue_vuejs1', plugin_dir_url( __FILE__ ).'dist/js/chunk-vendors.js', true);
 }

 add_action('wp_enqueue_scripts', 'func_load_vuescripts');

 //Add shortscode
 function func_wp_vue(){
     wp_enqueue_script('wpvue_vuejs');
     wp_enqueue_script('wpvue_vuejs1');
     wp_enqueue_style('wpvue_vuecss');

     $str= "<div id='app'>"
           ."</div>";
     return $str;
 } // end function

  add_shortcode( 'wpvue', 'func_wp_vue' );
?>