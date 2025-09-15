<?php
/**
 * single de graduação / pós-graduação / extensão com 12 colunas
 *
 * Template Name: Single curso 12 colunas
 * Template Post Type: extensao
 *
 * @package WordPress
 * @subpackage iesapm
 *
 */

?>

<?php get_header(); ?>

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

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <article id="article-id-<?php the_id();?>" <?php post_class(); ?>>
                <div class="row">

                    <div class="col-12">

                        <div class="entry-content-post">
                            <?php the_content(); ?>
                        </div>

                        <div class="mt-5">
                            <h2 class="text-primary h5 mb-4">Coordenação</h2>

                            <?php
                            $coordenadores_posts = get_field('coordenador');
                            if( $coordenadores_posts ): ?>

                            <div class="row g-3">

                                <?php foreach( $coordenadores_posts as $post ): ?>
                                <?php setup_postdata($post); ?>

                                <article id="article-id-<?php the_id();?>" <?php post_class('col-sm-6 col-lg-3'); ?>>
                                    <?php get_template_part('template-parts/card-corpo-docente'); ?>
                                </article>
                                <?php endforeach; ?>

                            </div>
                            <?php endif; ?>
                            <?php
                            wp_reset_postdata(); ?>

                        </div>

                        <div class="mt-5">
                            <?php // compartilhe nas redes sociais
                            get_template_part('template-parts/compartilhe-social'); ?>
                        </div>
                    </div>

                </div>
            </article>
            <?php endwhile; endif; ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>
