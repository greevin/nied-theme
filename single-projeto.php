<?php get_header(); ?>

<div class="container" style="margin-bottom: 30px;margin-top: 140px;background: #fff;border-radius: 3px;box-shadow: 0 1px 3px rgba(0,0,0,.1);">
  <div class="row">
  	<div class="col-xs-12 col-sm-12">
  		<?php
      if (have_posts()):
        while (have_posts()): the_post();
          get_template_part('content', 'projeto');
        endwhile;
      endif;
      ?>
  	</div>
  </div>
</div>

<?php get_footer(); ?>
