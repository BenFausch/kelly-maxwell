<?php
/**
 * The template for displaying the footer.
 *
 * @package   ingrid
 * @copyright Copyright (c) 2015 Ashley Evans and Anna Moore
 * @license   GPL2
 */
?>

</main> <!-- #main -->
</div> <!-- .container -->

<footer id="footer" class="site-footer" role="contentinfo">
	<div class="container">
		<?php get_sidebar();?>
	</div>
</footer>		

<div class="attribution text-center">

	<!-- <img src="" id="footer-flower" alt="<?php //esc_attr_e('A flower with leaves', 'ingrid');?>"> -->

	<div id="website-copyright">
		<?php printf(__('Copyright &copy; %s. All Rights Reserved.', 'ingrid'), get_bloginfo('name') . ' ' . date('Y'));?>
	</div>


</div>

</div> <!-- #page -->

<?php wp_footer();?>

</body>
</html>