<?php
// Cards
?>
<div class="col-md-4">
  <div class="card mb-4 box-shadow" style="height: 510px;">
    <!-- se o post tiver thumbnail -->
    <?php if( has_post_thumbnail() ): ?>
      <div class="text-center card-image-size">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          <?php the_post_thumbnail('custom-size'); ?>
        </a>
      </div>
      <!-- senao, apenas mostra o logo -->
    <?php else : ?>
      <div class="text-center card-image-size">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-transparente.png" alt="<?php the_title_attribute(); ?>">
        </a>
      </div>
    <?php endif; ?>
    <div class="card-body bg-light" style="padding-left: 10px;padding-right: 10px;">
      <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
      <p class="card-text"><?php the_excerpt(); ?></p>
      <p class="card-text"><a href="<?php the_permalink(); ?>" class="btn btn-link">Leia Mais »</a></p>
      <div class="d-flex justify-content-between align-items-center"></div>
    </div>
  </div>
</div>
