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
      <div class="col-md-4">
        <div class="card">
          <?php $urlImg = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
          <a class="card-img-top text-center" href="<?php the_permalink(); ?>">
            <div class="<?php echo $urlImg == false ? 'fundo-logo' : 'fundo-branco'; ?>">
    				      <div class="blog-element" style="background-image: url(<?php echo $urlImg; ?>);"></div>
    			  </div>
          </a>
          <div class="card-body">
            <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <p class="card-text"><a href="<?php the_permalink(); ?>" class="btn btn-link">Leia Mais »</a></p>
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
