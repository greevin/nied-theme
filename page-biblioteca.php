<?php
// Template Name: Biblioteca Digital
get_header();
?>

<?php include(TEMPLATEPATH . '/assets/includes/jumbotron.php'); ?>

<div class="pesquisa pagina-inicial">
  <div class="container">
    <div class="row">
      <?php
         $args = array('post_type' => 'biblioteca', 'category_name' => 'biblioteca-digital', 'post_status' => 'publish', 'posts_per_page' => -1);
         $posts = get_posts($args);

         if($posts) : foreach ($posts as $post) : setup_postdata($post);
      ?>
      <div class="col-md-4 text-center">
        <div class="card mb-3" style="background: <?php the_field('cor_do_fundo') ?>;">
          <div class="card-body">
            <?php if (get_field('icone')): ?>
              <div style="margin: auto;padding: 20px;">
                <i class="<?php the_field('icone'); ?>" aria-hidden="true"></i>
                <img src="<?php bloginfo('template_url'); ?>/assets/icons/<?php the_field('icone'); ?>" style="width: 100px;">
              </div>
            <?php endif; ?>
            <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <!-- <h5 class="card-text"><?php the_excerpt(); ?></h5> -->
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
