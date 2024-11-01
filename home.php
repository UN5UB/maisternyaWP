<?php
/*
Template Name: home

*/
?>

<?php get_header() ?>
<main>
        <div class="container">
            <section class="page">
                <div class="page__main">
                    <div class="page__main-offer">
                        <h1 class="page__main-offer-title"><?php the_field('title'); ?></h1>
                        <p class="page__main-offer-text"><?php the_field('text'); ?></p>
                        <a href="<?php echo get_page_link(112) ?>"  class="button__wrapper button__our-works">
                            <?php the_field('button'); ?>
                        </a>
                    </div>
                    <img src="<?php the_field('main-img'); ?>" alt="Main Img">
                </div>
            </section>
            <section class="page__works section-works" id="works">
                <h2 class="page__works-title"><?php the_field('works-title'); ?></h2>
                <div class="works__row">

                    <?php
                        global $post;

                        $myposts = get_posts([
                            'numberposts' => 4,
                            'category' => 7
                        ]);

                        if( $myposts ){
                            foreach( $myposts as $post ){
                                setup_postdata( $post );
                                ?>
                        <a target="_blank" href="<?php the_permalink(); ?>" class="works-card">
                            <?php the_post_thumbnail(
                                array(345, 240),
                                array(
                                    'class' => 'works-card__image'
                                )
                            ); ?>
                            <h3 class="works-card__title"><?php the_title(); ?></h3>
                        </a>
                        
                        


                            <?php } } wp_reset_postdata(); ?> 
                        



                        
                    
            </section>
            <a href="<?php echo get_page_link(112) ?>" class="button__wrapper button__see-more">
                    <?php the_field('works-btn'); ?>
                </a>
            <section class="page__about section-about" id="about">
                <h2 class="about__title"><?php the_field('about-title'); ?></h2>
                <div class="about__box top-box">
                    <div class="about__inner">
                        <p class="about__inner-text"><?php the_field('about-text-1'); ?></p>
                    </div>
                    <img class="about__image image-top" src="<?php the_field('about-img-1'); ?>" alt="Post">
                </div>
                <div class="about__box bottom-box">
                    <img class="about__image image-bottom" src="<?php the_field('about-img-2'); ?>"
                        alt="Big Projejct">
                    <div class="about__inner">
                        <p class="about__inner-text"><?php the_field('about-text-2'); ?></p>
                    </div>
                </div>
            </section>
            <section class="page__contacts section-contacts" id="contacts">
                <h2 class="page__contacts-title"><?php the_field('contacts-title'); ?></h2>
                <img class="page__contacts-decoration decoration-top"
                    src="<?php bloginfo('template_url'); ?>/img/icons/kisspng-decorative-borders-clip-art-portable-network-graph-decorative-border-png-vector-clipart-psd-peopl-5cf47de7a105e6 2.png"
                    alt="element">
                <div class="page__contacts-items">
                    <div class="page__contacts-content">
                        <h3 class="contacts-content__title">Ми знаходимося:</h3>
                        <p class="contacts-content__description"><?php the_field('adress'); ?></p>
                    </div>
                    <div class="page__contacts-content">
                        <h3 class="contacts-content__title">Напишіть нам</h3>
                        <div class="contacts-content__email">
                            <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M27.5 6C29.7782 6 31.625 7.84683 31.625 10.125V23.875C31.625 26.1532 29.7782 28 27.5 28H5.5C3.22183 28 1.375 26.1532 1.375 23.875V10.125C1.375 7.84683 3.22183 6 5.5 6H27.5ZM26.4727 8.75H6.52737L15.648 15.9505C16.1476 16.3449 16.8524 16.3449 17.3521 15.9505L26.4727 8.75ZM4.125 10.3571V23.875C4.125 24.6344 4.74061 25.25 5.5 25.25H27.5C28.2594 25.25 28.875 24.6344 28.875 23.875V10.3571L19.056 18.1089C17.5574 19.2921 15.4426 19.2921 13.944 18.1089L4.125 10.3571Z"
                                    fill="black" />
                            </svg>
                            <a href="mailto:<?php the_field('email'); ?>" class="email__link"><?php the_field('email'); ?></a>
                        </div>
                    </div>
                    <div class="page__contacts-content">
                        <h3 class="contacts-content__title">Зателефонуйте</h3>
                        <div class="contacts-content__tel">
                            <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.88243 2.80913C9.55627 1.1448 12.3123 1.44106 13.7138 3.31323L15.4477 5.62928C16.5881 7.15263 16.4875 9.28169 15.1338 10.6277L14.8054 10.9541C14.7911 10.9958 14.7564 11.1267 14.795 11.3755C14.8819 11.9358 15.3498 13.1244 17.314 15.0774C19.2775 17.0298 20.4744 17.4973 21.0427 17.5845C21.3003 17.6239 21.435 17.5871 21.4767 17.5725L22.0377 17.0147C23.2411 15.8181 25.0903 15.5944 26.5803 16.4044L29.2072 17.8325C31.4566 19.0553 32.025 22.1129 30.1819 23.9453L28.2287 25.8875C27.6133 26.4994 26.7857 27.0097 25.7756 27.1039C23.2882 27.3358 17.4882 27.0399 11.3941 20.9803C5.70443 15.323 4.6126 10.3895 4.47445 7.95873C4.4046 6.72961 4.98542 5.68969 5.72423 4.95507L7.88243 2.80913ZM12.0627 4.54927C11.3661 3.61875 10.0677 3.54476 9.33669 4.27168L7.17849 6.41763C6.72485 6.8687 6.50658 7.36581 6.53362 7.84172C6.64339 9.77303 7.52518 14.2248 12.8483 19.5177C18.4328 25.0705 23.5907 25.2362 25.5842 25.0503C25.9915 25.0123 26.3966 24.8007 26.7745 24.4249L28.7277 22.4828C29.5218 21.6934 29.3466 20.2558 28.2221 19.6445L25.5952 18.2165C24.8698 17.8222 24.0199 17.9523 23.4919 18.4772L22.8657 19.1L22.1386 18.3686C22.8657 19.1 22.8647 19.1009 22.8638 19.1019L22.8617 19.1038L22.8574 19.108L22.8485 19.1166L22.8284 19.1353C22.814 19.1485 22.7974 19.163 22.7788 19.1785C22.7414 19.2094 22.6955 19.2444 22.6406 19.2812C22.5305 19.3549 22.3851 19.4352 22.2024 19.5031C21.83 19.6419 21.3389 19.7164 20.73 19.623C19.5382 19.4403 17.9594 18.6277 15.8598 16.54C13.7609 14.453 12.9414 12.8815 12.7568 11.6917C12.6625 11.0833 12.7377 10.5921 12.8782 10.2193C12.947 10.0367 13.0281 9.89145 13.1025 9.7816C13.1396 9.72682 13.175 9.68102 13.2061 9.64381C13.2217 9.62521 13.2363 9.60873 13.2495 9.59434L13.2684 9.57429L13.2771 9.56541L13.2812 9.56124L13.2832 9.55923C13.2842 9.55826 13.2852 9.55728 14.0123 10.2885L13.2852 9.55728L13.6795 9.16514C14.2689 8.57916 14.3514 7.60642 13.7966 6.86533L12.0627 4.54927Z"
                                    fill="black" />
                            </svg>
                            <a href="tel:<?php the_field('phone'); ?>" class="tel__link"><?php the_field('phone'); ?></a>

                            <img class="page__contacts-decoration decoration-bottom"
                                src="<?php bloginfo('template_url'); ?>/img/icons/kisspng-decorative-borders-clip-art-portable-network-graph-decorative-border-png-vector-clipart-psd-peopl-5cf47de7a105e6 2.png"
                                alt="element">
                        </div>
                        <div class="contacts-content__tel">
                            <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.88243 2.80913C9.55627 1.1448 12.3123 1.44106 13.7138 3.31323L15.4477 5.62928C16.5881 7.15263 16.4875 9.28169 15.1338 10.6277L14.8054 10.9541C14.7911 10.9958 14.7564 11.1267 14.795 11.3755C14.8819 11.9358 15.3498 13.1244 17.314 15.0774C19.2775 17.0298 20.4744 17.4973 21.0427 17.5845C21.3003 17.6239 21.435 17.5871 21.4767 17.5725L22.0377 17.0147C23.2411 15.8181 25.0903 15.5944 26.5803 16.4044L29.2072 17.8325C31.4566 19.0553 32.025 22.1129 30.1819 23.9453L28.2287 25.8875C27.6133 26.4994 26.7857 27.0097 25.7756 27.1039C23.2882 27.3358 17.4882 27.0399 11.3941 20.9803C5.70443 15.323 4.6126 10.3895 4.47445 7.95873C4.4046 6.72961 4.98542 5.68969 5.72423 4.95507L7.88243 2.80913ZM12.0627 4.54927C11.3661 3.61875 10.0677 3.54476 9.33669 4.27168L7.17849 6.41763C6.72485 6.8687 6.50658 7.36581 6.53362 7.84172C6.64339 9.77303 7.52518 14.2248 12.8483 19.5177C18.4328 25.0705 23.5907 25.2362 25.5842 25.0503C25.9915 25.0123 26.3966 24.8007 26.7745 24.4249L28.7277 22.4828C29.5218 21.6934 29.3466 20.2558 28.2221 19.6445L25.5952 18.2165C24.8698 17.8222 24.0199 17.9523 23.4919 18.4772L22.8657 19.1L22.1386 18.3686C22.8657 19.1 22.8647 19.1009 22.8638 19.1019L22.8617 19.1038L22.8574 19.108L22.8485 19.1166L22.8284 19.1353C22.814 19.1485 22.7974 19.163 22.7788 19.1785C22.7414 19.2094 22.6955 19.2444 22.6406 19.2812C22.5305 19.3549 22.3851 19.4352 22.2024 19.5031C21.83 19.6419 21.3389 19.7164 20.73 19.623C19.5382 19.4403 17.9594 18.6277 15.8598 16.54C13.7609 14.453 12.9414 12.8815 12.7568 11.6917C12.6625 11.0833 12.7377 10.5921 12.8782 10.2193C12.947 10.0367 13.0281 9.89145 13.1025 9.7816C13.1396 9.72682 13.175 9.68102 13.2061 9.64381C13.2217 9.62521 13.2363 9.60873 13.2495 9.59434L13.2684 9.57429L13.2771 9.56541L13.2812 9.56124L13.2832 9.55923C13.2842 9.55826 13.2852 9.55728 14.0123 10.2885L13.2852 9.55728L13.6795 9.16514C14.2689 8.57916 14.3514 7.60642 13.7966 6.86533L12.0627 4.54927Z"
                                    fill="black" />
                            </svg>
                            <a href="tel:<?php the_field('phone-2'); ?>" class="tel__link"><?php the_field('phone-2'); ?></a>
                        
                            <img class="page__contacts-decoration decoration-bottom"
                                src="<?php bloginfo('template_url'); ?>/img/icons/kisspng-decorative-borders-clip-art-portable-network-graph-decorative-border-png-vector-clipart-psd-peopl-5cf47de7a105e6 2.png"
                                alt="element">
                        </div>
    
                    </div>
    
                </div>
    
            </section>
        </div>
    </main>
<?php get_footer() ?>