<?php
/**
 *
 * Template Name: Em Breve
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage iesapm
 *
 */

?>

<?php

get_header(); ?>

<main role="main">

    <section class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-auto py-3">
                    <h1 class="text-white"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="pad-page">
        <div class="container">

            <div class="mb-5">
                <?php get_template_part('template-parts/breadcrumbs'); ?>
            </div>

            <div>
                <p class="c-bloco-mensagem">Em breve</p>
                <a href="<?php bloginfo('url'); ?>" class="btn btn--sm btn-primary">Página inicial</a>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>
