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
                <!-- Data de Início -->
                <tr>
                  <?php if( get_field('data_de_inicio') ): ?>
                      <?php
                        $start_date = get_field('data_de_inicio', false, false);
                        $start_date = new DateTime($start_date);
                      ?>
                      <th scope="row">Data de Início</th>
                      <td><?php echo $start_date->format('d/m/Y'); ?></td>
                  <?php endif; ?>
                </tr>
                <!-- Horário de Início -->
                <tr>
                  <?php if( get_field('horario_de_inicio') ): ?>
                    <th scope="row">Horário de Início</th>
                    <td><?php the_field('horario_de_inicio'); ?></td>
                  <?php endif; ?>
                </tr>
                <!-- Data de Fim -->
                <tr>
                  <?php if( get_field('data_de_fim') ): ?>
                      <?php
                        $end_date = get_field('data_de_fim', false, false);
                        $end_date = new DateTime($end_date);
                      ?>
                      <th scope="row">Data de Fim</th>
                      <td><?php echo $end_date->format('d/m/Y'); ?></td>
                  <?php endif; ?>
                </tr>
                <!-- Horário de Fim -->
                <tr>
                  <?php if( get_field('horario_de_fim') ): ?>
                    <th scope="row">Horário de Fim</th>
                    <td><?php the_field('horario_de_fim'); ?></td>
                  <?php endif; ?>
                </tr>
                <!-- Local -->
                <tr>
                  <?php if( get_field('local') ): ?>
                    <th scope="row">Local</th>
                    <td><?php the_field('local'); ?></td>
                  <?php endif; ?>
                </tr>
                <!-- Mais Informações -->
                <tr>
                  <?php if( get_field('mais_informacoes') ): ?>
                    <th scope="row">Mais Informações</th>
                    <td><?php the_field('mais_informacoes'); ?></td>
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
