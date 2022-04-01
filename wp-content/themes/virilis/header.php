<?php
 /**
 * Header template
 * 
 * @package Virilis
 */
?>
<!DOCTYPE html>
 <html lang="<?php language_attributes(); ?>">
 <head>
     <meta charset="<?php bloginfo(); ?>
     ">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?php add_theme_support( 'title-tag' ); ?>
     </title>
     <?php wp_head(); ?>
     
 </head>
 <body <?php body_class("body"); ?>>
     <?php if(function_exists("wp_body_open")){
         wp_body_open();
         }
     ?>
     
     <header>
         Header
     </header>