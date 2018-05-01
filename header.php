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
  <title><?php bloginfo( 'name' ); wp_title('|', true, 'left'); ?></title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i|Playfair+Display:700" media="screen">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: white;box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, .05)">
    <div class="container">
        <!-- caso não tenha o logo, mostra o nome -->
        <?php
          if (has_custom_logo()) {
            the_custom_logo();
          } else {
            echo get_bloginfo('name');
          }
        ?>

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
