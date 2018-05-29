<?php
// Parceiros
?>

<div class="col-sm-3 col-md-15" style="display: flex;justify-content: center;align-items: center;">
  <div class="card text-center">
    <a href="<?php the_field('site_parceiro'); ?>"><?php echo get_the_post_thumbnail($post->ID, 'header-thumb-small'); ?></a>
  </div>
</div>
