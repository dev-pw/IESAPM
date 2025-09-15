<div class="c-card-curso bg-primary h-100 rounded-4 overflow-auto">
    <div class="bg-primary h-100">
        <a href="<?php the_permalink(); ?>" class="text-decoration-none" title="<?php the_title(); ?>">
            <figure class="c-card-curso__figure">
                <?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'img-fluid w-100' ) ); ?>
            </figure>
            <div class="bg-primary c-card-curso__wrapper p-3">
                <h3 class="fs-5 lh-base mb-4 text-center text-white"><?php the_title(); ?></h3>
                <p class="fs-6 fw-bold text-center text-white">Saiba mais</p>
            </div>
        </a>
    </div>
</article>
