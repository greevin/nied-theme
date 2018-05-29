<?php
// Template para o header da página
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if(is_singular() && pings_open(get_queried_object())): ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php endif; ?>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php wp_title('|', true, 'right'); bloginfo( 'name' ); ?></title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <!-- caso não tenha o logo, mostra o nome -->
        <div class="logo-principal logo">
          <?php
			       the_custom_logo();
			       if ( is_front_page() && is_home() ) :
				  ?>
				  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				  <?php else : ?>
				      <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
  	      <?php endif;
			     $nied_theme_description = get_bloginfo( 'description', 'display' );
			     if ( $nied_theme_description || is_customize_preview() ) :
	         ?>
				   <p class="site-description"><?php echo $nied_theme_description; /* WPCS: xss ok. */ ?></p>
			     <?php endif; ?>
        </div>
        <div class="logo-entidade-superior logo">
          <a href="https://www.cocen.unicamp.br/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-cocen.png" alt="Logo Cocen - Coordenadoria dos Centros e Núcleos Interdisciplinares de Pesquisa da Unicamp" style="width: 70px;height: 60px;margin-left: 20px;">
          </a>
          <a href="http://www.unicamp.br/unicamp/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-unicamp.png" alt="Logo Unicamp - Universidade de Campinas" style="width: 70px;height: 70px;margin-left: 20px;">
          </a>
        </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- menu customizado -->
      <?php
        wp_nav_menu(array(
            'theme_location'    => 'primary',
            'depth'                => 1, // 1 = with dropdowns, 0 = no dropdowns.
            'container'            => 'div',
            'container_class'    => 'collapse navbar-collapse',
            'container_id'        => 'navbarSupportedContent',
            'menu_class'        => 'navbar-nav ml-auto',
            'fallback_cb'        => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker()
        ));
      ?>
    </div>
  </nav>
</header>
