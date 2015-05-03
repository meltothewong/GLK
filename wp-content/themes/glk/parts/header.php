<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/build/production.css?<?php echo filemtime($_SERVER['DOCUMENT_ROOT'].'/css/build/production.css'); ?>"  />
    <link rel="shortcut icon" href="/favicon.ico" />
    <script src="//use.typekit.net/dwk3eek.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
    <title><?php
    if(is_front_page()) {
        echo bloginfo('name');
    } else {
        echo wp_title("",true),' | ',bloginfo('name');
    }
    ?></title>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
    <nav class="center">
        <li><a href="/#">Home</a></li>
        <li><a href="/#">Menu</a></li>
        <li><a href="/#">Hours</a></li>
        <li><a href="/#">Contact</a></li>
    </nav>
        