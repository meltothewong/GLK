<?php /* Template Name: Press */ ?>

<?php
Starkers_Utilities::get_template_parts( array( 'parts/header' ) );
if (have_posts()) : while (have_posts()) : the_post();
?>
<div class="container-wide padding-top">
	<div class="grid">
        <?php
        $presses = simple_fields_get_post_group_values(get_the_id(), "Press", false, 2);
            foreach ($presses as $press) :
                if ($press_image = wp_get_attachment_image_src( $press[1], 'thumbnail' )) {
                    $press_image = $press_image[0];
                }
        ?>
				<a class="grid-1-4 polaroid" href="<?= $press[3] ?>">
					<img src="<?= $press_image ?>" alt="<?= $press[2] ?>"></img>
					<p><?= $press[2] ?></p>
				</a>
        <?php
            endforeach;
        ?>
        <div class="grid-1-4"></div><div class="grid-1-4"></div> <!-- Placeholders -->
	</div>
</div>
<?php
endwhile; endif;
Starkers_Utilities::get_template_parts( array( 'parts/footer' ) );
?>
