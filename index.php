<?php get_header(); ?>

<!-- jumbotron -->
<?php include(TEMPLATEPATH . '/assets/includes/jumbotron-pagina-inicial.php'); ?>

<!-- noticias -->
<section class="noticias pagina-inicial" style="background: white;">
  <div class="container">
    <div class="section-title">
      <h3>Notícias</h3>
      <div class="divider"></div>
    </div>
    <div class="row grid-row">
      <?php
         $the_query = new WP_Query( array('category_name' => 'noticia, evento', 'posts_per_page' => 3,));
      ?>
      <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php include(TEMPLATEPATH . '/assets/includes/card.php'); ?>
      <?php endwhile; endif; ?>
    </div>
    <p class="card-text text-center"><a href="<?php echo esc_url( home_url( '/' ) ); ?>noticias/" class="btn btn-outline-primary">Mais Notícias</a></p>
  </div>
</section>

<!-- revista -->
<?php include(TEMPLATEPATH . '/assets/includes/revista-pagina-inicial.php'); ?>

<!-- linha do tempo -->
<section class="linha pagina-inicial bg-light">
  <div class="container">
    <div class="section-title">
      <h3>Linha do Tempo</h3>
      <div class="divider"></div>
    </div>
    <iframe src='https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1neiRyiwuE7Efe2J-vfhxvz9bNaDiV9LWbCoDbHYV2jw&font=Default&lang=pt-br&initial_zoom=2&height=650' width='100%' height='650' webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder='0'></iframe>
  </div>
</section>

<!-- parceiros -->
<section class="parceiros pagina-inicial" style="background: white;">
  <div class="container">
    <div class="row text-center">
      <?php
         $the_query = new WP_Query( array(
            'post_type' => 'parceria',
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
