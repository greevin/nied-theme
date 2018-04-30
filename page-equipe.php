<?php
// Template Name: Equipe
get_header();
?>

<?php include(TEMPLATEPATH . '/assets/includes/jumbotron.php'); ?>

<!-- noticias -->
<div class="equipe pagina-inicial">
  <div class="container">
    <div class="equipe-atual">
      <div class="divider"></div>
      <h3 class="text-center section-title" style="margin-bottom: 30px;">Atual</h3>
      <div class="row">
        <?php
           $args = array('category_name' => 'equipe-atual', 'post_status' => 'publish');
           $posts = get_posts($args);

           if($posts) : foreach ($posts as $post) : setup_postdata($post);
        ?>
        <div class="col-md-4 col-lg-3">
          <div class="card text-center">
            <div class="card-image">
              <?php $urlImg = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
              <div class="circle-image fundo-azul">
                <a href="<?php the_permalink(); ?>">
                  <?php if ($urlImg != false): ?>
                    <div class="circle-image" style="background-image: url(<?php echo $urlImg; ?>);"></div>
                    <!-- <?php the_post_thumbnail(false, array('class'=>'img-responsive responsive--full')); ?> -->
                  <?php else: ?>
                    <?php
                    $title = get_the_title();
                    $words = explode(" ", $title, 2);
                    $acronym = "";

                    foreach ($words as $w) {
                      $acronym .= $w[0];
                    }
                    ?>
                    <span><?php echo $acronym; ?></span>
                  <?php endif ?>
                </a>
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <div class="card-cargo">
                <?php
                  $cargos = get_field('cargo');

                  if( $cargos ): ?>
                    <?php foreach( $cargos as $cargo ): ?>
                      <p class="card-text"><?php echo $cargo; ?></p>
                    <?php endforeach; ?>
                <?php endif; ?>
              </div>
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

    <div class="equipe-anterior">
      <div class="divider"></div>
      <h3 class="text-center section-title" style="margin-bottom: 30px;">Anterior</h3>
      <div class="row">
        <?php
           $args = array('category_name' => 'equipe-anterior', 'post_status' => 'publish');
           $posts = get_posts($args);

           if($posts) : foreach ($posts as $post) : setup_postdata($post);
        ?>
        <div class="col-md-4 col-lg-3">
          <div class="card text-center">
            <div class="card-image">
              <?php $urlImg = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
              <div class="circle-image fundo-azul">
                <a href="<?php the_permalink(); ?>">
                  <?php if ($urlImg != false): ?>
                    <div class="circle-image" style="background-image: url(<?php echo $urlImg; ?>);"></div>
                    <!-- <?php the_post_thumbnail(false, array('class'=>'img-responsive responsive--full')); ?> -->
                  <?php else: ?>
                    <?php
                    $title = get_the_title();
                    $words = explode(" ", $title, 2);
                    $acronym = "";

                    foreach ($words as $w) {
                      $acronym .= $w[0];
                    }
                    ?>
                    <span><?php echo $acronym; ?></span>
                  <?php endif ?>
                </a>
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <div class="card-cargo">
                <?php
                  $cargos = get_field('cargo');

                  if( $cargos ): ?>
                    <?php foreach( $cargos as $cargo ): ?>
                      <p class="card-text"><?php echo $cargo; ?></p>
                    <?php endforeach; ?>
                <?php endif; ?>
              </div>
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
</div>
<?php get_footer(); ?>
