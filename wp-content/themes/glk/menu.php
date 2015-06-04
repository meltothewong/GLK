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
        <ul class="grid visit-us">
            <li class="grid-1-2">
                <strong class="text-muted icon icon-clock"></strong>
                <span>Open 9am - 9:30pm. Closed Tuesdays.</span>
            </li>
            <li class="grid-1-2">
                <strong class="text-muted icon icon-location"></strong>
                <a href="https://goo.gl/maps/obYH7" target="_blank">576 Grand Avenue Oakland, CA 94610</a>
            </li>
            <li class="grid-1-2">
                <strong class="text-muted icon icon-beer"></strong>
                <span>Happy Hour 4 - 7pm</span>
            </li>
            <li class="grid-1-2">
                <strong class="text-muted icon icon-talk-bubbles"></strong>
                <a href="tel:510-922-9582">510-922-9582</a>
            </li>
        </ul>
    </div>
</div>
<div class="stripe stripe-alt">
    <div class="container-wide">
        <?php echo do_shortcode('[fdm-menu id=37]'); ?>
    </div>
</div>
<?php
endwhile; endif;
Starkers_Utilities::get_template_parts( array( 'parts/footer' ) );
?>
