<?php get_header(); ?>

<!-- jumbotron -->
<section class="introducao">
  <div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
      <?php $jumbotron = get_post(434); ?>
      <h2 class="display-4 jumbotron-title"><?php the_field('jumbotron_titulo', $jumbotron); ?></h2>
      <p class="lead"><?php the_field('jumbotron_subtitulo', $jumbotron); ?></p>
      <a href="<?php the_field('link_da_pagina', $jumbotron) ?>" class="btn btn-dark my-2"><?php the_field('texto_do_botao', $jumbotron) ?></a>
    </div>
  </div>
</section>

<!-- noticias -->
<section class="noticias pagina-inicial">
  <div class="container">
    <div class="section-title">
      <h3>Notícias</h3>
      <div class="divider"></div>
    </div>
    <div class="row">
      <?php
         $the_query = new WP_Query( array(
           'category_name' => 'noticias',
            'posts_per_page' => 3,
         ));
      ?>
      <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php include(TEMPLATEPATH . '/assets/includes/card.php'); ?>
      <?php endwhile; endif; ?>
    </div>
    <p class="card-text text-center"><a href="#" class="btn btn-outline-primary">Mais Notícias</a></p>
  </div>
</section>

<!-- revista -->
<section class="revista pagina-inicial" style="background:#BBD5E7">
  <?php
  $args = array(
    'name'      => 'revistas',
    'post_type' => 'configuracoes_tema',
    'post_status' => 'publish'
  );
  $edicao_atual_loop = new WP_Query( $args );
  if ( $edicao_atual_loop->have_posts() ) :
    while ( $edicao_atual_loop->have_posts() ) : $edicao_atual_loop->the_post();
      $texto_apresentacao = get_field('texto_apresentacao');
      $imagem_da_edicao_atual = get_field('imagem_da_edicao_atual');
      $link_edicao_atual = get_field('link_edicao_atual');
?>
  <div class="container">
    <div class="section-title">
      <h3>Revista</h3>
      <div class="divider"></div>
      <div class="row">
        <div class="col-md-4 col-lg-4 text-center">
          <img alt="Licença Creative Commons" src="<?php echo $imagem_da_edicao_atual; ?>" style="border-width:0">
        </div>
        <div class="col-md-8 col-lg-8">
          <?php echo $texto_apresentacao; ?>
          <a href="<?php echo $link_edicao_atual; ?>" class="btn btn-primary">Edição Atual</a>
          <a href="http://nied.test/revista/" class="btn btn-secondary">Edições Anteriores</a>
        </div>
      </div>
    </div>
    <?php
  endwhile;
    wp_reset_postdata();
  endif;
    ?>
  </div>
</section>

<!-- linha do tempo -->
<div class="linha pagina-inicial" style="background: #f5f6f8;">
  <div class="container">
    <div class="page-title" style="margin: 30px 0;text-transform: uppercase;">
      <h3 class="text-center section-title">Linha do Tempo</h3>
      <div class="divider"></div>
    </div>
    <iframe src='https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1neiRyiwuE7Efe2J-vfhxvz9bNaDiV9LWbCoDbHYV2jw&font=Default&lang=en&initial_zoom=2&height=650' width='100%' height='650' webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder='0'></iframe>
  </div>
</div>

<!-- parceiros -->
<section class="parceiros pagina-inicial">
  <div class="container">
    <div class="row text-center">
      <?php
         $the_query = new WP_Query( array(
            'post_type' => 'parceiros',
            'posts_per_page' => -1,
         ));
      ?>
      <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php include(TEMPLATEPATH . '/assets/includes/parceiro.php'); ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
