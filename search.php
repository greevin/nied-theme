<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package nied-theme
 */

get_header();
?>

<section class="pagina-interna">
	<div class="jumbotron jumbotron-fluid text-center">
		<div class="container">
			<h2 class="display-4 jumbotron-title">
				<?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Resultado da busca para: %s', 'nied-theme' ), '<span>' . get_search_query() . '</span>' );
				?>
			</h2>
		</div>
	</div>
</section>

<div id="primary" class="pagina-inicial">
	<div class="container">
		<div class="row">
			<?php if ( have_posts() ) : ?>
				<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();
						include(TEMPLATEPATH . '/assets/includes/card.php');
					endwhile;
				?>
		</div>
		<?php
			the_posts_pagination( array(
				'mid_size' => 3,
				'prev_text' => __( 'Anterior', 'textdomain' ),
				'next_text' => __( 'Próximo', 'textdomain' )
			) );
		?>
		<?php endif; ?>
	</div>
</div><!-- #primary -->

<?php
get_footer();
