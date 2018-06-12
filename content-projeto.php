<?php ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
  <?php if (has_post_thumbnail()): ?>
    <div class="pull-right"><?php the_post_thumbnail('thumbnail'); ?></div>
  <?php endif; ?>
  <?php the_content(); ?>
  <div class="equipe-info">
    <table class="table">
      <tbody>
        <!-- Coordenador -->
        <tr>
          <?php if( get_field('coordenador') ): ?>
            <th scope="row">Coordenador</th>
            <td><?php the_field('coordenador'); ?></td>
          <?php endif; ?>
        </tr>
        <!-- E-mail -->
        <tr>
          <?php if( get_field('email') ): ?>
            <th scope="row">E-mail</th>
            <td><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></td>
          <?php endif; ?>
        </tr>
        <!-- Linha de Pesquisa -->
        <tr>
          <?php if( get_field('linha_de_pesquisa') ): ?>
            <th scope="row">Linha de Pesquisa</th>
            <td>
              <?php
                $linhas_de_pesquisa = get_field('linha_de_pesquisa');
                if( $linhas_de_pesquisa ): ?>
                	<?php foreach( $linhas_de_pesquisa as $linha_de_pesquisa ): ?>
                	  <?php echo $linha_de_pesquisa; ?><br>
                	<?php endforeach; ?>
              <?php endif; ?>
            </td>
          <?php endif; ?>
        </tr>
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
        <!-- Projetos -->
        <tr>
          <?php if( get_field('equipe') ): ?>
            <th scope="row">Equipe</th>
            <td>
              <?php
                $posts = get_field('equipe');
                if( $posts ): ?>
                    <?php foreach( $posts as $post ): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
            </td>
          <?php endif; ?>
        </tr>
        <!-- Parceiros -->
        <tr>
          <?php if( get_field('parceiros') ): ?>
            <th scope="row">Parceiros</th>
            <td>
              <?php
                $posts = get_field('parceiros');
                if( $posts ): ?>
                    <?php foreach( $posts as $post ): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <?php the_title(); ?><br>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
            </td>
          <?php endif; ?>
        </tr>
      </tbody>
    </table>
  </div>
</article>
