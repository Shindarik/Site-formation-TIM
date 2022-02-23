<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo get_template_directory_uri();?>/liaisons/jquery/jquery-3.6.0.min.js" defer></script>
    <script src="<?php echo get_template_directory_uri();?>/liaisons/js/navbar.js" defer></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/liaisons/css/styles.css">
    <title><?php bloginfo('name'); if(is_home() || is_front_page()){?> | <?php bloginfo('description');}else{?> | <?php wp_title("", true);}?></title>
    <?php wp_head();?>
</head>
<body>
    <header class="entete">
        <a class="entete__logo" href="<?php bloginfo('url');?>" title="<?php bloginfo("name");?>">
            <img src="<?php echo get_template_directory_uri();?>/liaisons/images/logoTIMBlack.svg" alt="Logo des TIM">
        </a>
        <?php if(has_nav_menu('principal')){?>
            <nav class="navigation">
                <?php wp_nav_menu(array('theme_location'=>'principal'));?>
            </nav>
        <?php }?>
    </header>

    <div class="contenu">