<?php get_header(); ?>

<!-- jumbotron -->
<div class="jumbotron jumbotron-fluid text-center introducao" style="margin-top: 116px;">
  <div class="container">
    <?php $jumbotron = get_page_by_title('Página Inicial'); ?>
    <h2 class="display-4 jumbotron-title"><?php the_field('jumbotron_titulo', $jumbotron); ?></h2>
    <p class="lead"><?php the_field('jumbotron_subtitulo', $jumbotron); ?></p>
    <a href="o-nied" class="btn btn-dark my-2">SAIBA MAIS</a>
  </div>
</div>

<!-- noticias -->
<div class="noticias pagina-inicial">
  <div class="container">
    <div class="page-title" style="margin: 30px 0;text-transform: uppercase;">
      <h3 class="text-center section-title">Notícias</h3>
      <div class="divider"></div>
    </div>
    <div class="card-deck">
      <?php
         $args = array('category_name' => 'noticias', 'post_status' => 'publish', 'showposts' => 3);
         $posts = get_posts($args);

         if($posts) : foreach ($posts as $post) : setup_postdata($post);

      ?>
    <div class="card">
      <?php $urlImg = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
      <a class="card-img-top text-center" href="<?php the_permalink(); ?>">
        <div class="<?php echo $urlImg == false ? 'fundo-logo' : 'fundo-branco'; ?>">
				      <div class="blog-element" style="background-image: url(<?php echo $urlImg; ?>);"></div>
			  </div>
      </a>
      <div class="card-body">
        <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
        <p class="card-text"><?php the_excerpt(); ?></p>
        <p class="card-text"><a href="<?php the_permalink(); ?>" class="btn btn-link">Leia Mais »</a></p>
      </div>
    </div>
    <?php
       endforeach;
       endif;
    ?>
  </div>
    <p class="card-text text-center"><a href="#" class="btn btn-outline-primary">Mais Notícias</a></p>
  </div>
</div>

<!-- revista -->
<div class="revista pagina-inicial" style="background:#BBD5E7">
  <?php
     $args = array('post_type' => 'page', 'pagename' => 'revistas');
     $revista = get_posts($args);

     if($revista) : foreach ($revista as $post) : setup_postdata($post);
  ?>
  <div class="container">
    <div class="page-title" style="margin: 30px 0;text-transform: uppercase;">
      <h3 class="text-center section-title"><?php the_title(); ?></h3>
      <div class="divider"></div>
    </div>
    <div class="row">
      <div class="col-md-4 col-lg-4 text-center">
        <?php the_post_thumbnail(false, array('class' => 'img-fluid')) ?>
      </div>
      <div class="col-md-8 col-lg-8">
        <?php the_content(); ?>
        <a href="http://nied.test/v-4-n-1-2017/" class="btn btn-primary">Edição Atual</a>
        <a href="http://nied.test/revista/" class="btn btn-secondary">Edições Anteriores</a>
      </div>
    </div>
  </div>
  <?php
     endforeach;
     endif;
  ?>
</div>

<!-- linha do tempo -->
<div class="linha pagina-inicial" style="background: #f5f6f8;">
  <div class="container">
    <div class="page-title" style="margin: 30px 0;text-transform: uppercase;">
      <h3 class="text-center section-title">Linha do Tempo</h3>
      <div class="divider"></div>
    </div>
    <iframe src='https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1neiRyiwuE7Efe2J-vfhxvz9bNaDiV9LWbCoDbHYV2jw&font=Default&lang=en&initial_zoom=2&height=650' width='100%' height='650' webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder='0'></iframe>
  </div>
</div>

<!-- parceiros -->
<div class="parceiros pagina-inicial">
  <div class="container">
    <div class="page-title" style="margin: 30px 0;text-transform: uppercase;">
      <h3 class="text-center section-title">Parceiros</h3>
      <div class="divider"></div>
    </div>
    <div class="container-fluid">
      <!-- primeira linha -->
      <div class="row">
        <div class="col">
          <div class="card mb-4 box-shadow">
            <a href="http://capes.gov.br/">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/logos-parceiros/capes.jpg" data-holder-rendered="true">
            </a>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 box-shadow">
            <a href="http://www.cnpq.br">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/logos-parceiros/cnpq.jpg" data-holder-rendered="true">
            </a>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 box-shadow">
            <a href="http://www.fapesp.br/">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/logos-parceiros/fapesp.png" data-holder-rendered="true">
            </a>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 box-shadow">
            <a href="http://www.fundap.sp.gov.br/">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/logos-parceiros/fundap.png" data-holder-rendered="true">
            </a>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 box-shadow">
            <a href="http://www.itaucultural.org.br/">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/logos-parceiros/itau_cultural.png" data-holder-rendered="true">
            </a>
          </div>
        </div>
    </div>
    <!-- segunda linha -->
    <div class="row">
      <div class="col">
        <div class="card mb-4 box-shadow">
          <a href="http://www.nied.unicamp.br/oea/">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/logos-parceiros/oea.gif" data-holder-rendered="true">
          </a>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 box-shadow">
          <a href="http://www.preac.unicamp.br/">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/logos-parceiros/preac.png" data-holder-rendered="true">
          </a>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 box-shadow">
          <a href="http://www.prg.unicamp.br/portal/">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/logos-parceiros/prg.png" data-holder-rendered="true">
          </a>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 box-shadow">
          <a href="http://www.hewlett.org/">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/logos-parceiros/the-william-and-flora-hewlett-foundation.png" data-holder-rendered="true">
          </a>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 box-shadow">
          <a href="http://www.unesco.org/new/pt/brasilia/">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/logos-parceiros/unesco.jpg" data-holder-rendered="true">
          </a>
        </div>
      </div>
    </div>
</div>
  </div>
</div>

<?php get_footer(); ?>
