<?php
// Cards
?>
<div class="col-md-6 col-lg-4 custom-card">
  <div class="card mb-4 box-shadow">
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
          <img style="max-width: 50%;height: auto;" src="<?php bloginfo('template_url'); ?>/assets/images/logo-transparente.png" alt="<?php the_title_attribute(); ?>">
        </a>
      </div>
    <?php endif; ?>
    <div class="card-body bg-light">
      <div class="card-category">
        <?php the_terms( $post->ID, 'category', '', ' | ' ); ?>
      </div>
    <?php
      $categories = get_the_category();
      if($categories[0]->name !== 'Evento') :
    ?>
      <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
      <p class="card-text"><?php echo wp_trim_words(get_the_content(), 25, '...' ); ?></p>
      <p class="card-text"><a href="<?php the_permalink(); ?>" class="btn btn-link">Leia Mais »</a></p>
      <div class="d-flex justify-content-between align-items-center"></div>
    <?php else : ?>
       <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
       <?php if( get_field('data_de_inicio') ): ?>
           <?php
             $start_date = get_field('data_de_inicio', false, false);
             $start_date = new DateTime($start_date);

             $end_date = get_field('data_de_fim', false, false);
             $end_date = new DateTime($end_date);
           ?>
           <span class="card-text">Data: </span>
           <span><?php echo $start_date->format('d/m/Y'); ?></span>
           <?php if( get_field('data_de_fim') &&  $start_date->format('d/m/Y') != $end_date->format('d/m/Y')): ?>
             <span> - <?php echo $end_date->format('d/m/Y'); ?></span>
           <?php endif; ?>
           <br>
       <?php endif; ?>
       <?php if( get_field('horario_de_inicio') ): ?>
           <span>Horário: </span>
           <span><?php the_field('horario_de_inicio'); ?></span>
           <?php if( get_field('horario_de_fim') ): ?>
             <span> - <?php the_field('horario_de_fim'); ?></span>
           <?php endif; ?>
          <br>
       <?php endif; ?>
       <?php if( get_field('local') ): ?>
         <span>Local: </span>
         <span><?php the_field('local'); ?></span>
       <?php endif; ?>
           <p class="card-text"><a href="<?php the_permalink(); ?>" class="btn btn-link">Leia Mais »</a></p>
           <div class="d-flex justify-content-between align-items-center"></div>
      <?php endif; ?>
    </div>
  </div>
</div>
