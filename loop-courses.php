<?php wp_reset_query();

$args = array(
	'post_type' => 'course',
	'order' => 'ASC',
	'posts_per_page' => 25,
);

$courses = new WP_Query( $args );

if ( $courses->have_posts() ) {
?>
<section class="posts-archive archives-columns-one posts-archive-courses">

<?php
while ( $courses->have_posts() ) : $courses->the_post();
?>
		<article class="loop-post-single loop-post-border loop-post-testimonial">
		<!-- <figure width="float: left; width: 25%">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>"></a>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
		</figure> -->
		<div>

		<h2 id="post-<?php the_ID(); ?>" class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<div class="post-excerpt">
						<p><?php the_excerpt(); ?></p>
						</div><!-- end .post-excerpt -->
		</div>
		</article>

	<?php endwhile; ?>

</section>
<?php } ?>

<?php get_template_part( 'pagination'); ?>

<?php wp_reset_query(); ?>
