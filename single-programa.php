<?php get_header(); ?>

<div class="container single-container">
  <div class="row">
  	<div class="col-xs-12 col-sm-12">
  		<?php if (have_posts()): while (have_posts()): the_post(); ?>
  				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  					<?php the_title('<h2 class="entry-title">', '</h2>'); ?>
            <div class="mb-3 post-meta"><small>Postado em: <?php the_date('d/m/Y', '<span>', '</span>'); ?> | <?php the_terms( $post->ID, 'category', '', ' | ' ); ?></small></div>
  					<?php if (has_post_thumbnail()): ?>
  						<div class="pull-right"><?php the_post_thumbnail('medium'); ?></div>
  					<?php endif; ?>
  					<?php the_content(); ?>
            <table class="table">
              <tbody>
                <tr>
                  <?php if( get_field('ano_programa') ): ?>
                    <th scope="row">Ano</th>
                    <td><?php the_field('ano_programa'); ?></td>
                  <?php endif; ?>
                </tr>
                <tr>
                  <?php if( get_field('download_software') ): ?>
                    <th scope="row">Download</th>
                    <td><a href="<?php the_field('download_software'); ?>"> Download do arquivo</a></td>
                  <?php endif; ?>
                </tr>
              </tbody>
            </table>
  				</article>
  			<?php endwhile; endif; ?>
  	</div>
  </div>
</div>

<?php get_footer(); ?>
