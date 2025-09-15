<?php
/**
 * taxonomy
 *
 * @package WordPress
 * @subpackage iesapm
 *
 */

?>

<?php get_header(); ?>


<?php // Get the taxonomy object
$taxonomy = get_queried_object(); ?>

<?php // Get post type taxonomy
$post_type = get_post_type(); ?>

<main role="main">

    <section class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-auto py-3">
                    <h1 class="text-white">Cursos <?php echo $taxonomy->name; ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="pad-page">
        <div class="container">

            <div class="mb-5">
                <?php get_template_part('template-parts/breadcrumbs'); ?>
            </div>

            <div class="row gy-5">

                <?php
                if (have_posts()): while (have_posts()) : the_post();
                ?>

                <article id="article-id-<?php the_id();?>" <?php post_class('col-sm-6 col-lg-4 col-xl-3'); ?>>
                    <?php get_template_part('template-parts/card-curso'); ?>
                </article>

                <?php
                endwhile;endif;
                wp_reset_query();
                ?>

            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>
