<?php
/**
 * The template for displaying all single posts.
 *
 * @package   ingrid
 * @copyright Copyright (c) 2015 Ashley Evans and Anna Moore
 * @license   GPL2
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>

	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'inc/template-parts/content', get_post_format() ); ?>


	<?php endwhile; ?>

<?php else : ?>

	<?php get_template_part( 'inc/template-parts/content', 'none' ); ?>

<?php endif; ?>

<?php get_footer(); ?>
