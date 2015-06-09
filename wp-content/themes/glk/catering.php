<?php /* Template Name: Catering */ ?>

<?php
Starkers_Utilities::get_template_parts( array( 'parts/header' ) );
if (have_posts()) : while (have_posts()) : the_post();
?>
<div class="container-wide padding-top">
    <?php the_content(); ?>
	<div class="grid">
        <?php
        $caterings = simple_fields_get_post_group_values(get_the_id(), "Catering", false, 2);
            foreach ($caterings as $catering) :
                if ($catering_image = wp_get_attachment_image_src( $catering[1], 'thumbnail' )) {
                    $catering_image = $catering_image[0];
                }
        ?>
				<div class="grid-1-3 box">
					<img src="<?= $catering_image ?>" alt="<?= $catering[2] ?>"></img>
				</div>
        <?php
            endforeach;
        ?>
        <div class="grid-1-3"></div> <!-- Placeholders -->
	</div>
</div>
<?php
endwhile; endif;
Starkers_Utilities::get_template_parts( array( 'parts/footer' ) );
?>
