<?php
/*
 * Plugin Name:       Ace Plugin
 * Description:       Just Handle the basics with this plugin.
 * Version:           1.10.3
 * Author:            Sahoo
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       aceplugin
 */

 if(!defined('ABSPATH')){
    header("Location : /");
    die();
 }

 function myfirstfucntion(){

 }

 register_activation_hook( __FILE__, 'myfirstfucntion' );

 function myshortcode(){
  return "<h1>Hello World</h1>";
 }

 add_shortcode( 'msc', 'myshortcode' );

 ?>