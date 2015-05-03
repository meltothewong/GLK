<?php /* Template Name: Home */ ?>

<?php
Starkers_Utilities::get_template_parts( array( 'parts/header' ) );
if (have_posts()) : while (have_posts()) : the_post();
$post = simple_fields_get_post_group_values(get_the_id(), "Post", false, 2);
$post = $post[0];
?>

<?php
endwhile; endif;
Starkers_Utilities::get_template_parts( array( 'parts/footer' ) );
?>