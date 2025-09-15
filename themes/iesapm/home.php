<?php
/**
 * Lista todas as notícias
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
                    <h1 class="text-white">Notícias</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="pad-page">
        <div class="container">

            <div class="mb-5">
                <?php get_template_part('template-parts/breadcrumbs'); ?>
            </div>

            <div class="mb-5">
                <?php get_template_part('template-parts/search'); ?>
            </div>

            <?php
            if (have_posts()) : ?>

            <div class="row gy-5">

                <?php while (have_posts()) : the_post(); ?>
                <article id="article-id-<?php the_id();?>" <?php post_class('col-12 col-sm-6 col-lg-4'); ?>>
                    <?php // card post
                    get_template_part('template-parts/card-post'); ?>
                </article>
                <?php endwhile; ?>

                <div class="col-12 d-flex justify-content-center">
                    <?php paging_nav(); ?>
                </div>

            </div>

            <?php else : ?>

            <div>
                <p class="c-bloco-mensagem">
                    Sem notícias no momento :(
                </p>
                <a href="<?php bloginfo('url'); ?>" class="btn btn--sm btn-primary">Página inicial</a>
            </div>

            <?php endif; wp_reset_query(); ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>
