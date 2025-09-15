<?php
/**
 * 404
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
                    <h1 class="text-white">Página não encontrada</h1>
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
                <p class="c-bloco-mensagem">
                    Ops!<br>
                    Esta página não foi encontrada :(
                </p>
                <a href="<?php bloginfo('url'); ?>" class="btn btn--sm btn-primary">Página inicial</a>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>
