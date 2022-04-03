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
     <title><?php add_theme_support('title-tag'); ?>
     </title>
     <?php wp_head(); ?>
     
 </head>
 <body <?php body_class('body'); ?>>
     <?php if (function_exists('wp_body_open')) {
       wp_body_open();
     } ?>

    <div id="page" class="site">
        <header id="masthead" class="site-header" role="banner">
            <?php get_template_part('template-parts/header/nav'); ?>
            
        </header>
        <div id="content" class="site-content">

        <?php
        trait Say_World
        {
          public function say_hello()
          {
            echo 'Hello Trait';
          }
        }

        class Base
        {
          use Say_World;
        }


?>
