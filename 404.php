<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package nied-theme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="pagina-interna">
			  <div class="jumbotron jumbotron-fluid text-center">
			    <div class="container">
			      <h2 class="display-4 jumbotron-title"><?php esc_html_e( 'Página não encontrada.', 'nied-theme' ); ?></h2>
			    </div>
			  </div>
			</section>

			<div class="container pagina-inicial">
				<p><?php esc_html_e( 'Parece que nada foi encontrado neste local. Use a busca ou veja os posts recentes que possam te ajudar.', 'nied-theme' ); ?></p>
				<?php
				get_search_form();

				the_widget( 'WP_Widget_Recent_Posts' );
				?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
