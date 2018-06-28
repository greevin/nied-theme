<?php get_header(); ?>

<?php include(TEMPLATEPATH . '/assets/includes/jumbotron.php'); ?>

<div class="pesquisa pagina-inicial">
  <div class="container">
    <div class="row grid-row">
      <?php
         $args = array('post_type' => 'biblioteca', 'category_name' => 'audiovisual', 'post_status' => 'publish', 'posts_per_page' => -1);
         $posts = get_posts($args);

         if($posts) : foreach ($posts as $post) : setup_postdata($post);
         include(TEMPLATEPATH . '/assets/includes/card-audiovisuais.php');
      ?>
      <?php
         endforeach;
         endif;
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
