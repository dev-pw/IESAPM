<?php
/**
 * Page
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
                <div class="entry-content-post">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php endwhile; endif; ?>

        </div>
    </section>

</main>

<?php // scripts somente na página ID 61
if(is_page(61)) : ?>

<script>

jQuery(document).ready(function ($) {

    /*=================================================
    LIGHTBOX
    ==================================================*/
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'showImageNumberLabel': false,
        'albumLabel': false,
        'maxWidth': 800,
    })

    // adicionar atributo via js na galeria lightbox
    $('#article-id-61 .wp-block-image a').attr("data-lightbox", "lightbox");

var body = $('body');

});

</script>
<?php endif ?>


<?php get_footer(); ?>
