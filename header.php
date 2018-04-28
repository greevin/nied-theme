<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    <?php bloginfo( 'name' ); wp_title('|', true, 'left'); ?>
  </title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display:700" media="screen">
  <?php wp_head(); ?>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <!-- caso não tenha o logo, mostra o nome -->
          <?php
            if (has_custom_logo()) {
              the_custom_logo();
            } else {
              echo get_bloginfo('name');
            }
          ?>
        </a>

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
