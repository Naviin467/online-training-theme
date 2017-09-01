<?php wp_reset_query();

$args = array(
	'post_type' => 'course',
	'order' => 'ASC',
	'posts_per_page' => 25,
);

$courses = new WP_Query( $args );

if ( $courses->have_posts() ) {
?>

<ul class="posts-archive archives-columns-one posts-archive-courses">

<?php
while ( $courses->have_posts() ) : $courses->the_post();
?>
	<li class="loop-post-single loop-post-border loop-post-courses">
		<figure>
			<h2 id="post-<?php the_ID(); ?>" class="post-title">
				<a href="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<div class="post-excerpt">
				<blockquote class="course">
					<?php the_excerpt(); ?>
				</blockquote>
			</div><!-- end .post-excerpt -->
		</figure>
		<div class="cleaner">&nbsp;</div>
	</li><!-- .loop-post-single -->

	<?php endwhile; ?>

</ul><!-- end .posts-list-->
<?php } ?>

<?php get_template_part( 'pagination'); ?>

<?php wp_reset_query(); ?>
