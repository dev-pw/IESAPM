<?php
/**
 * Header
 *
 * @package WordPress
 * @subpackage iesapm
 *
 */
?>

<!DOCTYPE html>
<html class="no-js" lang="pt-br">

<head>

   <?php // Google tag (gtag.js)
   echo do_shortcode( '[wpcode id="2927"]' ); ?>

   <?php // Google Tag Manager
   echo do_shortcode( '[wpcode id="2754"]' ); ?>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
   <?php wp_head();?>
</head>

<body <?php body_class(); ?>>

<?php // Google Tag Manager (noscript)
echo do_shortcode( '[wpcode id="2755"]' ); ?>

<?php 
// POPUP
if(is_front_page()) :

   if(get_field('ativar_popup', 3080) == 'true'):
      get_template_part('inc/popup');
   endif;

endif; ?>

<div class="wrapper-site">

<header class="l-header-site">
   <div class="container">

      <div class="row">

         <div class="col-auto d-flex align-items-center brand my-2">
            <a href="<?php bloginfo('url')?>" title="<?php bloginfo('name')?>">
               <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/brand.png" alt="<?php bloginfo('name')?>" class="img-fluid">
            </a>
         </div>

         <div class="col-auto ms-auto">

            <div class="align-items-center justify-content-end row d-none d-lg-flex mt-lg-4 col-direita">
               <div class="col-auto l-buttons d-flex">
                  <a href="https://educacional.usecerbrum.net/AreaEducacional/paginas/externas/pgProcessosSeletivos.aspx?login=631" target="_blank" class="btn btn-secondary" title="Processo seletivo">Processo seletivo</a>
                  <a href="http://educacional.usecerbrum.net/inicio.aspx" class="btn btn-outline-primary ms-3" title="Área restrita" target="_blank"><span class="icon-user me-2"></span>Área restrita</a>
                  <a href="http://educacional.usecerbrum.net/inicio.aspx" class="btn btn-outline-primary ms-3" title="Área do professor" target="_blank"><span class="icon-school me-2"></span>Área do professor</a>
               </div>
               <div class="col-auto d-none d-xl-flex">
                  <?php get_template_part('template-parts/rede-social'); ?>
               </div>
            </div>

            <div class="align-items-center d-flex h-100 d-lg-none">
               <span class="display-2 fw-light icon-menu js-nav-toggle text-primary"></span>
            </div>

         </div>

         <div class="col-12 col-lg-auto ms-lg-auto">
            <div class="c-nav-menu js-nav-menu">
               <div class="c-nav-menu__header d-flex justify-content-end p-2 d-lg-none">
                  <span class="fs-1 icon-clear me-3 mt-3 text-white js-nav-toggle"></span>
               </div>
               <div class="c-nav-menu__itens d-lg-flex justify-content-lg-end">
                  <?php get_template_part('template-parts/menu-principal'); ?>
               </div>
               <div class="d-flex justify-content-center my-5 d-lg-none">
                  <?php get_template_part('template-parts/rede-social'); ?>
               </div>
            </div>
         </div>

      </div>

   </div>
</header>
