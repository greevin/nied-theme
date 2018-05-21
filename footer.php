<?php
// Template para o footer da página
?>

<!-- footer -->
<?php
  $args = array(
    'name'      => 'rodape',
    'post_type' => 'configuracoes_tema',
    'post_status' => 'publish'
  );
  $campos_rodape_loop = new WP_Query( $args );
  if ( $campos_rodape_loop->have_posts() ) :
    while ( $campos_rodape_loop->have_posts() ) : $campos_rodape_loop->the_post();
      // Seção Licença
      $rodape_imagem = get_field('rodape_imagem');
      $rodape_endereco_licenca = get_field('rodape_endereco_licenca');
      $rodape_texto_licenca = get_field('rodape_texto_licenca');
      // Seção Endereço
      $rodape_nome_universidade = get_field('rodape_nome_universidade');
      $rodape_endereco_universidade = get_field('rodape_endereco_universidade');
      $rodape_telefone_universidade = get_field('rodape_telefone_universidade');
      $rodape_fale_conosco = get_field('rodape_fale_conosco');
      // Seção Mapa
      $rodape_mapa = get_field('rodape_mapa');
?>

<footer>
  <div class="container">
    <div class="row">
      <!-- licença -->
      <div class="col-lg-3 col-md-3 licenca">
        <div class="content">
          <h6>LICENÇA</h6>
          <div class="title-divider"></div>
          <a href="<?php echo $rodape_endereco_licenca; ?>" rel="license"><img alt="Licença Creative Commons" src="<?php echo $rodape_imagem; ?>" style="border-width:0"></a>
          <p class="my-3"><?php echo $rodape_texto_licenca; ?></p>
        </div>
      </div>
      <!-- endereco -->
      <div class="col-lg-5 col-md-5 endereco">
        <div class="content">
          <h6>ENDEREÇO</h6>
          <div class="title-divider"></div>
          <?php echo $rodape_nome_universidade; ?>
          <div class="endereco-universidade">
            <div class="row">
              <div class="col-md-1" style="margin: auto;">
                <i class="fa fa-map-pin fa-2x" aria-hidden="true"></i>
              </div>
              <div class="col-md-11 info">
                <small><b>Endereço</b></small>
                <p><?php echo $rodape_endereco_universidade; ?></p>
              </div>
            </div>
          </div>
          <div class="telefone">
            <div class="row">
              <div class="col-md-1" style="margin: auto;">
                  <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
              </div>
              <div class="col-md-11 info">
                <small><b>Telefone</b></small>
                <p><?php echo $rodape_telefone_universidade; ?></p>
              </div>
            </div>
          </div>
          <div class="fale-conosco">
            <div class="row">
              <div class="col-md-1" style="margin: auto;">
                <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
              </div>
              <div class="col-md-11 info">
                <small><b>Fale Conosco</b></small>
                <p class><a href="mailto:<?php echo $rodape_fale_conosco; ?>"><?php echo $rodape_fale_conosco; ?></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- mapa -->
      <div class="col-lg-4 col-md-4 mapa">
        <h6>MAPA</h6>
        <div class="title-divider"></div>
        <div class="embed-responsive embed-responsive-4by3">
          <iframe class="embed-responsive-item" src="<?php echo $rodape_mapa; ?>"></iframe>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php
  endwhile;
    wp_reset_postdata();
  endif;
?>

<?php wp_footer(); ?>

</body>

</html>
