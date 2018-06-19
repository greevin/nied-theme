<?php get_header(); ?>

<?php
$post = $wp_query->post;

if ( in_category( 'evento' ) ) {
  include( TEMPLATEPATH.'/single-evento.php' );
}
else if ( in_category( 'programa' ) ) {
  include( TEMPLATEPATH.'/single-programa.php' );
}
else if ( in_category( 'livro' ) ) {
  include( TEMPLATEPATH.'/single-livro.php' );
}
else {
  include( TEMPLATEPATH.'/single-generico.php' );
}
?>

<?php get_footer(); ?>
