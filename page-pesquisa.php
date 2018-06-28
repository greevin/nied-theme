<?php
// Template Name: Pesquisa
get_header();
?>

<?php include(TEMPLATEPATH . '/assets/includes/jumbotron.php'); ?>

<!-- Projetos -->
<div class="pesquisa pagina-inicial" style="background: white;">
  <div class="container">
    <div class="em-andamento section-title">
      <h3 class="text-center">Em Andamento</h3>
      <div class="divider" style="width: 100px;"></div>
      <div class="row grid-row">
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

    <div class="finalizados section-title">
      <h3 class="text-center">Finalizados</h3>
      <div class="divider" style="width: 100px;"></div>
      <div class="row grid-row">
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
<?php get_footer(); ?>
