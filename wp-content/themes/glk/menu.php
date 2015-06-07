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
            <span class="btn btn-primary btn-big no-click">Menu</span>
            <a class="btn btn-inactive btn-big" href="/weekend-brunch#menu">Weekend Brunch</a>
        </h1>
        <?php echo do_shortcode('[fdm-menu id=37]'); ?>
    </div>
</div>
<?php
endwhile; endif;
Starkers_Utilities::get_template_parts( array( 'parts/footer' ) );
?>
