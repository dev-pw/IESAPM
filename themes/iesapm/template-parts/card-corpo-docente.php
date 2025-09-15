<div class="h-100">
    <div class="bg-white shadow h-100 p-3 rounded-4">

        <figure class="border border-5 border-secondary img-fluid mx-auto overflow-hidden rounded-circle" style="width: 120px; height: 120px;">
            <?php echo get_the_post_thumbnail( $post_id, 'small', array( 'class' => 'img-fluid' ) ); ?>
        </figure>

        <div class="py-3">

            <h2 class="fs-6 mb-3 text-center text-primary"><span><?php the_field('prefixo'); ?></span> <?php the_title(); ?></h2>

            <?php //echo wp_trim_words(  get_the_content(), 20 ) ;?>

            <?php if(get_field('link_curriculum_lattes')) : ?>
            <div class="d-flex justify-content-center mt-4">
                <a href="<?php the_field('link_curriculum_lattes'); ?>" target="_blank" class="btn btn-secondary btn--sm">Curriculum lattes</a>
            </div>
            <?php endif; ?>

        </div>

    </div>
</div>
