<?php /* Template Name: Press*/ ?>

<?php
Starkers_Utilities::get_template_parts( array( 'parts/header' ) );
if (have_posts()) : while (have_posts()) : the_post();
$post = simple_fields_get_post_group_values(get_the_id(), "Post", false, 2);
$post = $post[0];
?>
<div class="container">
	<div class="grid">
		<div class="grid-1-3">
			<div class="polaroid">
				<a href="http://splashpad.org/2015/03/splash-pad-newsletter-march-2015/">
					<img src="http://splashpad.org/wp-content/uploads/2015/02/GrandLakeKitchen3-300x237.jpg"></img>
					<p>East Bay Eats</p>
				</a>
			</div>
		</div>
	</div>
</div>
<?php
endwhile; endif;
Starkers_Utilities::get_template_parts( array( 'parts/footer' ) );
?>