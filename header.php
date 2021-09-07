<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tejidos Europa</title>

    <?php wp_head();?>

</head>
<body <?php body_class();?>>
    <header>
        <div class="container split-x">
            <a href="<?php bloginfo('url');?>">
                <img src="<?php bloginfo('template_directory');?>/images/logo.jpg" class="logo" >
            </a>
            <?php get_search_form();?>

            <?php
                wp_nav_menu(

                    array(
                        'theme_location' => 'top-menu',
                        'menu_class' => 'top-menu split-x'
                    )

                )
            ;?>
        </div> 
    </header>   
    