


<?php get_header(); ?>
<main>
    <div class="container">
        <section class="page__ourworks">
        <h2 class="page__ourworks-title"><?php the_field('works-title'); ?></h2>
        <div class="works__row">
            
<?php
                        global $post;

                        $myposts = get_posts([
                            'numberposts' => -1,
                            'category' => 7
                        ]);

                        if( $myposts ){
                            foreach( $myposts as $post ){
                                setup_postdata( $post );
                                ?>

                        <a href="<?php the_permalink(); ?>" class="works-card">
                            <?php the_post_thumbnail(
                                array(345, 240),
                                array(
                                    'class' => 'works-card__image'
                                )
                            ); ?>
                            <h3 class="works-card__title"><?php the_title(); ?></h3>
                        </a>
                        
                        


                            <?php } } wp_reset_postdata(); ?> 
        </div>
        </section>
    </div>
</main>


<?php get_footer(); ?>