<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/build/production.css?<?php echo filemtime($_SERVER['DOCUMENT_ROOT'].'/css/build/production.css'); ?>"  />
    <link rel="shortcut icon" href="/favicon.ico" />
    <script src="//use.typekit.net/dwk3eek.js"></script>
    <script src="//use.typekit.net/tvq7dxv.js"></script>
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
    <header>
        <nav class="center">
            <div class="center nav-home-link">
                <a href="/" title="Grand Lake Kitchen"><span class="icon icon-logo"></span></a>
            </div>
            <ul>
                <?php wp_nav_menu( array('menu' => 'Main Menu', 'items_wrap' => '%3$s', 'container' => false )); ?>
            </ul>
        </nav>
        <?php 
            $headline = simple_fields_get_post_group_values(get_the_id(), "Headline", false, 2);
            $headline = $headline[0];
            if ($headline[1]) : 
        ?>
                <div class="header-image" style="background-image: url('<?= wp_get_attachment_url($headline[1]); ?>')"></div>
        <?php
            endif;
        ?>
        <div class="stripe">
            <div class="container center">
                <h2>Visit Us</h2> 
                <p>Hours: Wednesday - Monday, 9:00 - 9:30PM</p>
                <p>Happy Hour: 4:00 - 7:00PM</p>
                <p>576 Grand Avenue Oakland, CA 94610 | 510-922-9582</p>        
            </div>
        </div>
    </header>
        