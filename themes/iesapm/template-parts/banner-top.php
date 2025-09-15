<div class="l-banner-header">
    <div>
        <div id="js-carousel-banner-header" class="owl-carousel position-relative">

            <?php
            $args_slide = array(
                'post_type'      => 'banner-header',
                'posts_per_page' => -1,
                'post_status'    => 'publish',
                'orderby'        => 'menu_order',
                'order'          => 'DESC',
            );
            query_posts($args_slide);

            if (have_posts()): while (have_posts()) : the_post();

            // variaveis
            $banner_mobile = get_field('banner_mobile');
            $banner_desktop = get_field('banner_desktop');
            $link_banner = get_field('link_do_banner');
            ?>

            <div class="item">
                <a href="<?php echo $link_banner; ?>" title="<?php the_title(); ?>">
                    <picture>
                        <source srcset="<?php echo $banner_desktop['url']; ?>" media="(min-width: 768px)" >
                        <img src="<?php echo $banner_mobile['url']; ?>" class="img-fluid w-100" alt="<?php the_title(); ?>">
                    </picture>
                </a>
            </div>

            <?php
            endwhile;endif;
            wp_reset_query();
            ?>

         </div>
    </div>
</div>

<script>
jQuery(document).ready(function ($) {

    // carousel dos cursos
    $('#js-carousel-banner-header').owlCarousel({
        dots: true,
        nav: true,
        autoplay: true,
        loop: true,
        items: 1,
        navText:  ['<span class="icon-arrow_back_ios"></span>', '<span class="icon-arrow_forward_ios"></span>'],
        autoHeight: true,

        responsive: {
            0: {
                nav:   false,
            },

            1200: {
                nav:   true,
            },
        }
    });

    var body = $('body');
});
</script>
