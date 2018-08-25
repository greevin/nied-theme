<?php get_header(); ?>

<?php include(TEMPLATEPATH . '/assets/includes/jumbotron.php'); ?>

<div class="container" style="margin-top: 25px;margin-bottom: 25px;">
  <div class="row">
  	<div class="col-xs-12 col-sm-12">
  		<?php if (have_posts()): while (have_posts()): the_post(); ?>
  				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  					<?php if (has_post_thumbnail()): ?>
  						<div class="pull-right"><?php the_post_thumbnail('medium'); ?></div>
  					<?php endif; ?>
  					<?php the_content(); ?>
  				</article>
  			<?php endwhile; endif; ?>
  	</div>
  </div>
</div>

<?php get_footer(); ?>
