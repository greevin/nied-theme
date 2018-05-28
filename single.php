<?php get_header(); ?>

<div class="container" style="margin-bottom: 30px;margin-top: 140px;">
  <div class="row">
  	<div class="col-xs-12 col-sm-12">
  		<?php if (have_posts()): while (have_posts()): the_post(); ?>
  				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  					<?php the_title('<h2 class="entry-title">', '</h2>'); ?>
  					<?php if (has_post_thumbnail()): ?>
  						<div class="pull-right"><?php the_post_thumbnail('thumbnail'); ?></div>
  					<?php endif; ?>
  					<?php the_content(); ?>
  				</article>
  			<?php endwhile; endif; ?>
  	</div>
  </div>
</div>

<?php get_footer(); ?>
