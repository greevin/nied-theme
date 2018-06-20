<?php
// Template Name: Revista
get_header();
?>

<?php include(TEMPLATEPATH . '/assets/includes/jumbotron.php'); ?>

<!-- noticias -->
<div class="pesquisa pagina-inicial">
  <div class="container">
    <div class="row">
      <?php
         $args = array('post_type'=> 'publicacoes','category_name' => 'revista', 'post_status' => 'publish');
         $posts = get_posts($args);

         if($posts) : foreach ($posts as $post) : setup_postdata($post);
      ?>
      <div class="col-md-3">
        <div class="card">
          <a class="card-img-top text-center" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
          <div class="card-body">
            <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <p class="card-text"><a href="<?php the_permalink(); ?>" class="btn btn-outline-primary">Leia Mais »</a></p>
          </div>
        </div>
      </div>
      <?php
         endforeach;
         endif;
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
