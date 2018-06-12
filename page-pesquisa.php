<?php
// Template Name: Pesquisa
get_header();
?>

<?php include(TEMPLATEPATH . '/assets/includes/jumbotron.php'); ?>

<!-- Projetos -->
<div class="pesquisa pagina-inicial" style="background: white;">
  <div class="container">
    <div class="em-andamento">
      <div class="divider"></div>
      <h3 class="text-center section-title" style="margin-bottom: 30px;">Em Andamento</h3>
      <div class="row">
        <div class="card-columns">
          <?php
             $args = array('post_type' => 'projeto', 'post_status' => 'publish', 'posts_per_page' => -1, 'meta_key' => 'data_de_inicio', 'orderby'=> 'meta_value', 'order' => 'DESC');
             $posts = get_posts($args);

             if($posts) : foreach ($posts as $post) : setup_postdata($post);
          ?>
          <?php if( ! get_field('data_de_fim') ): ?>
            <?php include(TEMPLATEPATH . '/assets/includes/card-projeto.php'); ?>
          <?php endif; ?>
          <?php
             endforeach;
             endif;
          ?>
        </div>
      </div>
    </div>

    <div class="finalizados">
      <div class="divider"></div>
      <h3 class="text-center section-title" style="margin-bottom: 30px;">Finalizados</h3>
      <div class="row">
        <div class="card-columns">
          <?php
             $args = array('post_type' => 'projeto', 'post_status' => 'publish', 'posts_per_page' => -1, 'meta_key' => 'data_de_inicio', 'orderby'=> 'meta_value', 'order' => 'DESC');
             $posts = get_posts($args);

             if($posts) : foreach ($posts as $post) : setup_postdata($post);
          ?>
          <?php if( get_field('data_de_fim') ): ?>
            <?php include(TEMPLATEPATH . '/assets/includes/card-projeto.php'); ?>
          <?php endif; ?>
          <?php
             endforeach;
             endif;
          ?>
        </div>
      </div>
    </div>

  </div>
</div>
<?php get_footer(); ?>
