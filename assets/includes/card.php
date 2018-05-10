<?php
// Cards
?>
<div class="col-md-4">
  <div class="card mb-4 box-shadow">
    <!-- se o post tiver thumbnail -->
    <?php if( has_post_thumbnail() ): ?>
      <div class="text-center">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          <div class="" style="height: 240px;background: lightblue;display: flex;align-items: center;justify-content: center;">
            <?php the_post_thumbnail(array(320, 240)); ?>
          </div>
        </a>
      </div>
      <!-- senao, apenas mostra o logo -->
    <?php else : ?>
      <div class="text-center" style="height: 240px;background: lightblue;display: flex;align-items: center;justify-content: center;">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-transparente.png" alt="<?php the_title_attribute(); ?>">
        </a>
      </div>
    <?php endif; ?>
    <div class="card-body" style="padding-left: 10px;padding-right: 10px;">
      <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
      <p class="card-text"><?php the_excerpt(); ?></p>
      <p class="card-text"><a href="<?php the_permalink(); ?>" class="btn btn-link">Leia Mais »</a></p>
      <div class="d-flex justify-content-between align-items-center">
      </div>
    </div>
  </div>
</div>
