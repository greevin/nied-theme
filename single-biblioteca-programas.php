<?php get_header(); ?>

<?php include(TEMPLATEPATH . '/assets/includes/jumbotron.php'); ?>

<div class="pesquisa pagina-inicial">
  <div class="container">
    <div class="row">
      <div class="card-columns">
        <?php
           $args = array('post_type' => 'biblioteca', 'category_name' => 'programa', 'post_status' => 'publish', 'posts_per_page' => -1);
           $posts = get_posts($args);

           if($posts) : foreach ($posts as $post) : setup_postdata($post);
           include(TEMPLATEPATH . '/assets/includes/card-columns.php');
        ?>
        <?php
           endforeach;
           endif;
        ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
