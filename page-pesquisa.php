<?php
// Template Name: Pesquisa
get_header();
?>

<?php include(TEMPLATEPATH . '/assets/includes/jumbotron.php'); ?>

<!-- noticias -->
<div class="pesquisa pagina-inicial">
  <div class="container">
    <div class="row">
      <?php
         $args = array('category_name' => 'pesquisa', 'post_status' => 'publish');
         $posts = get_posts($args);

         if($posts) : foreach ($posts as $post) : setup_postdata($post);
      ?>
      <?php include(TEMPLATEPATH . '/assets/includes/card.php'); ?>

      <?php
         endforeach;
         endif;
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
