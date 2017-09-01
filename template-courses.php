<?php
/*
Template Name: Courses List
*/
?>
<?php get_header(); ?>

	<div id="main">

		<?php
		if (!is_active_sidebar('sidebar-left')) { $no_side_left = true; }
		if (!is_active_sidebar('sidebar-right')) { $no_side_right = true; }
		?>

		<div class="wrapper">

			<?php while (have_posts()) : the_post(); ?>

			<div class="column <?php
			if (isset($no_side_left) && !isset($no_side_right)) {
				echo 'column-wide';
			} elseif (!isset($no_side_left) && isset($no_side_right)) {
				echo 'column-wide column-last';
			} elseif (isset($no_side_left) && isset($no_side_right)) {
				echo 'column-full column-last';
			} else {
				echo 'column-medium';
			} ?>">

				<div class="widget">
					<h1 class="post-title"><?php the_title(); ?></h1>

					<div class="post-content">
						<?php the_content(); ?>

						<div class="cleaner">&nbsp;</div>

					</div><!-- end .post-content -->

					<div class="divider divider-notop">&nbsp;</div>

					<?php get_template_part('loop', 'courses'); ?>

					<div class="cleaner">&nbsp;</div>
				</div><!-- end .widget -->

				<div class="cleaner">&nbsp;</div>

			</div><!-- end .column .column-medium -->

			<div class="cleaner">&nbsp;</div>
			<?php endwhile; ?>

		</div><!-- end .wrapper -->

	</div><!-- end #main -->

<?php get_footer(); ?>
