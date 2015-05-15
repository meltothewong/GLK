<?php /* Template Name: Home */ ?>

<?php
Starkers_Utilities::get_template_parts( array( 'parts/header' ) );
if (have_posts()) : while (have_posts()) : the_post();
$post = simple_fields_get_post_group_values(get_the_id(), "Post", false, 2);
$post = $post[0];
?>
<div class="container center">
	<h2>Eggs and Such</h2>
	<h4>Served Until 2pm.</h4> 
	<p>Eggs come prepared as described on the menu. An alternative of scrambled is offered.</p>
	<hr>
</div>
<div class="container">
	<div class="grid">
		<div class="grid-1-1">
			<h3>Soft Scrambled Eggs $12.00</h3>
			<p>Smoked chedder on thick-sliced toast with bacon or avocado, side of greens</p>
			<h5>with bacon and avocado add $2.00</h5>
		</div>
	</div>
</div>
<?php
endwhile; endif;
Starkers_Utilities::get_template_parts( array( 'parts/footer' ) );
?>