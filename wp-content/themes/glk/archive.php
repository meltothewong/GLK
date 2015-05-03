<?php
Starkers_Utilities::get_template_parts( array( 'parts/header' ) );
?>

<div id="posts">
	<div class="post-group">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<a class="block-link" href="<?php the_permalink() ?>">
			<article class="row blog-cols">
				<?php if (has_post_thumbnail()) {
					$image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
					<div class="col-1-3">
						<img src="<?php echo $image[0]; ?>" alt="" />
					</div>
				<?php } ?>
				<div class="<?php echo (has_post_thumbnail() ? 'col-2-3' : 'center-col center') ?> post" id="post-<?php the_ID(); ?>">
					<small class="meta">
						<?php the_author(); ?> &nbsp;/&nbsp; <?php the_time('M j, Y') ?>
					</small>
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt() ?>
				</div>
			</article>
		</a>
		<?php endwhile; endif; ?>
	</div>
</div>

<div id="more-link">
	<?php next_posts_link('Load More', $recent->max_num_pages); ?>
</div>

<script type="text/javascript">
$(document).ready(function(){
	// Ajax Pagination
	$('#more-link a').live('click', function(){
		var link = $(this).attr('href');
		$('#more-link a').addClass('disabled').text('Loading...');
		$('<div>').load(link+' .post-group', function() {
    		$('#posts').append($(this).html());
    		$('.post-group').last().hide().slideDown(1500, 'easeOutQuart');
    		$('#more-link a').removeClass('disabled');
		});
		$('#more-link').load(link+' #more-link');
		return false;
	});
});
</script>

<?php Starkers_Utilities::get_template_parts( array( 'parts/footer' ) );