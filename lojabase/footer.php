<?php
/**
 * The template for displaying the footer.
 *
 * @package OceanWP WordPress theme
 */

?>

	</main><!-- #main -->

	

	

	

</div><!-- #wrap -->



</div><!-- #outer-wrap -->

<div class="rodape1 p-4 bg-dark text-white row">
	<div class="col-md text-center">
		<?php dynamic_sidebar( 'col-1' ) ?>
	</div>

	<div class="col-md text-center">
		<?php dynamic_sidebar( 'col-2' ) ?>
	</div>

	<div class="col-md">
		<?php dynamic_sidebar( 'col-3' ) ?>
	</div>
</div>
<div class="bg-secondary p-2 text-center text-white">
	&copy; <?php echo date('Y') ?> - Desenvolvido por 
	<a href="gui<?php echo get_bloginfo( 'admin_email' )?>">Gui</a>
</div>

<?php
// If is not sticky footer.
if ( ! class_exists( 'Ocean_Sticky_Footer' ) ) {
	get_template_part( 'partials/scroll-top' );
}
?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<?php wp_footer(); ?>
</body>
</html>