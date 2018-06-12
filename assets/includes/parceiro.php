<?php
// Parceiros
?>

<div class="col-sm-3 col-md-15 parceiros">
  <div class="card text-center" style="margin: 0 auto;">
    <a href="<?php the_field('site_parceiro'); ?>"><?php echo get_the_post_thumbnail($post->ID); ?></a>
  </div>
</div>
