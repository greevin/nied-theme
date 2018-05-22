<?php
// Template Name: Equipe
get_header();
?>

<?php include(TEMPLATEPATH . '/assets/includes/jumbotron.php'); ?>

<!-- equipes -->
<div class="equipe pagina-inicial">
  <div class="container">
    <div class="equipe-atual">
      <div class="divider"></div>
      <h3 class="text-center section-title" style="margin-bottom: 30px;">Atual</h3>
      <div class="row">
        <?php
           $args = array('post_type' => 'equipe', 'category_name' => 'equipe-atual', 'post_status' => 'publish');
           $posts = get_posts($args);

           if($posts) : foreach ($posts as $post) : setup_postdata($post);
        ?>
        <?php include(TEMPLATEPATH . '/assets/includes/card-equipe.php'); ?>
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
           $args = array('post_type' => 'equipe', 'category_name' => 'equipe-anterior', 'post_status' => 'publish');
           $posts = get_posts($args);

           if($posts) : foreach ($posts as $post) : setup_postdata($post);
        ?>
        <?php include(TEMPLATEPATH . '/assets/includes/card-equipe.php'); ?>
        <?php
           endforeach;
           endif;
        ?>
      </div>
    </div>

  </div>
</div>
<?php get_footer(); ?>
