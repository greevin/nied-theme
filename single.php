<?php
$post = $wp_query->post;

if ( in_category( 'revista' ) ) {
  include( TEMPLATEPATH.'/single-revista.php' );
}
else {
  include( TEMPLATEPATH.'/single-generic.php' );
}
?>
