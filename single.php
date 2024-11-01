<?php 
// Template Name: Галерея робіт
?>

<?php get_header() ?>


<main>
            <div class="container">
                <section class="page__gallery">

                        <h1><?php the_field('gallery-title'); ?></h1>
                    <div class="gallery__items" id="gallery">
                        <?php
                            //Get the images ids from the post_metadata
                            $images = acf_photo_gallery('gallery', $post->ID);
                            //Check if return array has anything in it
                                if( count($images) ):
                                //Cool, we got some data so now let's loop over it
                                foreach($images as $image):
                                    $title = $image['title']; //The title
                                    $full_image_url= $image['full_image_url']; //Full size image url
                                    $small_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); //Resized size to 262px width by 160px height image url
                        ?>
                        <a href="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                        <?php if( !empty($url) ){ ?><a href="<?php echo $url; ?>" <?php echo ($target == 'true' )? 'target="_blank"': ''; ?>><?php } ?>
                            <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                        <?php if( !empty($url) ){ ?></a><?php } ?>
                        </a>
                        <?php endforeach; endif; ?>
                        
                        


                            
                    </div>
                </section>
                
            </div>
        </main>
        
<?php get_footer(); ?>