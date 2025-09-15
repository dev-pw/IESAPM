<?php
/**
 * Front-page
 *
 * @package WordPress
 * @subpackage iesapm
 *
 */

?>

<?php get_header(); ?>

<main role="main">

    <?php get_template_part('template-parts/banner-top'); ?>

    <section class="pad-featured pb-0">
        <div class="container">
            <h2 class="mb-4 text-center text-uppercase">Graduação</h2>
            <div class="owl-carousel owl-theme position-relative mt-4 js-carousel-cursos">

                <?php
                $args = array(
                    'post_type' => 'graduacao',
                    'posts_per_page' => 8,
                    'orderby' => 'title',
                    'order' => 'ASC'
                );
                query_posts($args);

                if (have_posts()): while (have_posts()) : the_post();
                ?>

                <article id="article-id-<?php the_id();?>" <?php post_class('item h-100'); ?>>
                    <?php get_template_part('template-parts/card-curso'); ?>
                </article>

                <?php
                endwhile;endif;
                wp_reset_query();
                ?>

            </div>

            <div class="d-flex justify-content-center mt-5">
                <a href="<?php echo get_post_type_archive_link('graduacao'); ?>" title="Ver todos os cursos de Graduação" class="btn btn-secondary">Ver todos</a>
            </div>

        </div>
    </section>

    <section class="pad-featured pb-0">
        <div class="container">
            <h2 class="mb-4 text-center text-uppercase">Pós-Graduação</h2>
            <div class="owl-carousel owl-theme position-relative mt-4 js-carousel-cursos">

                <?php
                $args = array(
                    'post_type' => 'pos-graduacao',
                    'posts_per_page' => 8,
                    'orderby' => 'title',
                    'order' => 'ASC'
                );
                query_posts($args);

                if (have_posts()): while (have_posts()) : the_post();
                ?>

                <article id="article-id-<?php the_id();?>" <?php post_class('item h-100'); ?>>
                    <?php get_template_part('template-parts/card-curso'); ?>
                </article>

                <?php
                endwhile;endif;
                wp_reset_query();
                ?>

            </div>

            <div class="d-flex justify-content-center mt-5">
                <a href="<?php echo get_post_type_archive_link('pos-graduacao'); ?>" title="Ver todos os cursos de Pós-Graduação" class="btn btn-secondary">Ver todos</a>
            </div>

        </div>
    </section>

    <section class="pad-featured">
        <div class="container">
            <h2 class="mb-4 text-center text-uppercase">Extensão</h2>
            <div class="owl-carousel owl-theme position-relative mt-4 js-carousel-cursos">

                <?php
                $args = array(
                    'post_type' => 'extensao',
                    'posts_per_page' => 8,
                    'orderby' => 'title',
                    'order' => 'ASC'
                );
                query_posts($args);

                if (have_posts()): while (have_posts()) : the_post();
                ?>

                <article id="article-id-<?php the_id();?>" <?php post_class('item h-100'); ?>>
                    <?php get_template_part('template-parts/card-curso'); ?>
                </article>

                <?php
                endwhile;endif;
                wp_reset_query();
                ?>

            </div>

            <div class="d-flex justify-content-center mt-5">
                <a href="<?php echo get_post_type_archive_link('extensao'); ?>" title="Ver todos os cursos de Extensão" class="btn btn-secondary">Ver todos</a>
            </div>

        </div>
    </section>

    <section class="pad-featured bg-light">
        <div class="container">
            <h2 class="mb-4 text-center text-uppercase">Notícias</h2>

            <div class="row gy-5">

                <?php
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 4,
                );
                query_posts($args);

                if (have_posts()):
                while (have_posts()) : the_post(); ?>

                <article id="article-id-<?php the_id();?>" <?php post_class('col-sm-6 col-xl-3 h-100'); ?>>
                    <?php // card post
                    get_template_part('template-parts/card-post'); ?>
                </article>

                <?php endwhile; endif; wp_reset_query(); ?>

            </div>

            <div class="d-flex justify-content-center mt-5">
                <a href="<?php echo get_permalink('2701'); ?>" title="Ver todas as notícias" class="btn btn-secondary">Ver todos</a>
            </div>

        </div>
    </section>

    <section class="pad-featured" style="background-image: url('<?php echo get_bloginfo( 'wpurl' ); ?>/wp-content/uploads/bg-news.jpg'); background-size: cover;">
        <div class="container">
            <h2 class="mb-4 text-center text-uppercase text-white">Conecte-se a IESAPM</h2>
            <form id="formNews" name="formNews" method="post" action="<?php bloginfo('url')?>/form_action/news.php" class="row">
                <div class="col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control border-0" id="campo-nome" name="nome" placeholder="Nome completo">
                        <label for="campo-nome" class="fw-bold small text-primary">Nome completo</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control border-0" id="campo-email" name="email" placeholder="E-mail">
                        <label for="campo-email" class="fw-bold small text-primary">E-mail</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control border-0" id="campo-telefone" name="celular" placeholder="Telefone">
                        <label for="campo-telefone" class="fw-bold small text-primary">Telefone</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-floating mb-3">
                        <select class="form-select border-0" id="select-curso-interesse" name="tipo_curso" aria-label="Selecione o curso de interesse">
                            <option selected>[Selecione]</option>
                            <option value="1">Graduação</option>
                            <option value="2">Pós-Graduação</option>
                            <option value="3">Extensão</option>
                        </select>
                        <label for="select-curso-interesse" class="fw-bold small text-primary">Curso de interesse</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-floating mb-3">
                        <select class="form-select border-0" id="select-campo-area" name="curso" aria-label="Selecione a sua área de interesse">
                            <option selected>[Selecione]</option>
                            <option value="1">Médica</option>
                            <option value="2">Multi-profissional</option>
                        </select>
                        <label for="select-campo-area" class="fw-bold small text-primary">Área de interesse</label>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <input type="submit" value="Cadastrar" class="btn btn-secondary">
                </div>
            </form>
        </div>
    </section>

</main>

<?php get_footer(); ?>

<script>
jQuery(document).ready(function ($) {

    // carousel dos cursos
    $('.js-carousel-cursos').owlCarousel({
        loop:     false,
        margin:   24,
        autoplay: false,
        nav:      false,
        dots:     true,
        navText:  ['<span class="icon-arrow_back_ios"></span>', '<span class="icon-arrow_forward_ios"></span>'],

        responsive: {
            0: {
                items: 1,
            },

            576: {
                items: 2,
            },

            768: {
                items: 2,
            },

            992: {
                items: 3,
            },

            1200: {
                items: 4,
                nav:   true,
            },
        }
    });

    var body = $('body');
});
</script>
