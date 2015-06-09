<?php /* Template Name: Menu */ ?>

<?php
Starkers_Utilities::get_template_parts( array( 'parts/header' ) );
if (have_posts()) : while (have_posts()) : the_post();
$post = simple_fields_get_post_group_values(get_the_id(), "Post", false, 2);
$post = $post[0];
?>
<div class="stripe">
    <div class="container">
        <h2 class="center">Visit Us</h2>
        <?php Starkers_Utilities::get_template_parts( array( 'parts/info' ) ); ?>
    </div>
</div>
<a name="menu"></a>
<div class="stripe stripe-alt">
    <div class="container-wide">
        <h1 class="center">
            <?php if (is_page(8)) : ?>
                <a class="btn btn-inactive btn-big" href="/#menu">Menu</a>
                <span class="btn btn-primary btn-big no-click">Weekend Brunch</span>
            <?php else : ?>
                <span class="btn btn-primary btn-big no-click">Menu</span>
                <a class="btn btn-inactive btn-big" href="/weekend-brunch#menu">Weekend Brunch</a>
            <?php endif; ?> 
        </h1>
        <?php
            if (is_page(8)) {
                echo do_shortcode('[fdm-menu id=169]');
            } else {
                echo do_shortcode('[fdm-menu id=37]');
            }
        ?>
    </div>
</div>
<?php
endwhile; endif;
Starkers_Utilities::get_template_parts( array( 'parts/footer' ) );
?>
