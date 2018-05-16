<?php get_header(); ?>

<!-- jumbotron -->
<div class="jumbotron jumbotron-fluid text-center introducao" style="margin-top: 100px;">
  <div class="container">
    <?php $jumbotron = get_post(434); ?>
    <h2 class="display-4 jumbotron-title"><?php the_field('jumbotron_titulo', $jumbotron); ?></h2>
    <p class="lead"><?php the_field('jumbotron_subtitulo', $jumbotron); ?></p>
    <a href="<?php the_field('link_da_pagina', $jumbotron) ?>" class="btn btn-dark my-2"><?php the_field('texto_do_botao', $jumbotron) ?></a>
  </div>
</div>

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
<div class="revista pagina-inicial" style="background:#BBD5E7">
  <?php
     $args = array('post_type' => 'page', 'pagename' => 'revistas');
     $revista = get_posts($args);

     if($revista) : foreach ($revista as $post) : setup_postdata($post);
  ?>
  <div class="container">
    <div class="page-title" style="margin: 30px 0;text-transform: uppercase;">
      <h3 class="text-center section-title"><?php the_title(); ?></h3>
      <div class="divider"></div>
    </div>
    <div class="row">
      <div class="col-md-4 col-lg-4 text-center">
        <?php the_post_thumbnail(false, array('class' => 'img-fluid')) ?>
      </div>
      <div class="col-md-8 col-lg-8">
        <?php the_content(); ?>
        <a href="http://nied.test/v-4-n-1-2017/" class="btn btn-primary">Edição Atual</a>
        <a href="http://nied.test/revista/" class="btn btn-secondary">Edições Anteriores</a>
      </div>
    </div>
  </div>
  <?php
     endforeach;
     endif;
  ?>
</div>

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
