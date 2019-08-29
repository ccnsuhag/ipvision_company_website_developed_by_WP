<?php 


function review_section(){

    vc_map(array(

        'name' => __('Review','ipvision'),
        'description' => 'this is slider addon',
        'base' => 'review_section',
        'category' => 'Ipvision',
        'icon' => get_theme_file_uri('/assets/img/icons/ftp.jpg'),
        'params' =>array(

           
             array(
                        'param_name' =>'title',
                        'type' => 'textfield',
                        'heading' => 'Title'
                    ),
                    array(
                        'param_name' => 'description',
                        'type' => 'textarea',
                        'heading' => 'description'
                    ),
                     array(
                        'param_name' => 'image_one',
                        'type' => 'attach_image',
                        'heading' => 'this is slider image'
                    ),
                        array(
                        'param_name' =>'title_one',
                        'type' => 'textfield',
                        'heading' => 'Title'
                    ),
                    array(
                        'param_name' => 'description_one',
                        'type' => 'textarea',
                        'heading' => 'description'
                    ),
                    array(
                        'param_name' => 'image_two',
                        'type' => 'attach_image',
                        'heading' => 'this is slider image'
                    ),
                        array(
                        'param_name' =>'title_two',
                        'type' => 'textfield',
                        'heading' => 'Title'
                    ),
                    array(
                        'param_name' => 'description_two',
                        'type' => 'textarea',
                        'heading' => 'description'
                    ),


             


        )
    ));


}
add_action('vc_before_init','review_section');


function ipvision_review_section($attr){

    extract(
        shortcode_atts(array(
            'title' => '',
            'description' => '',
            'image_one' => '',
            'title_one' => '',
            'description_one' => '',
            'image_two' => '',
            'title_two' => '',
            'description_two' => '',
        


        ),$attr)
    );
    ob_start();

    ?>


 <section class="theme-bg-overlay bg-img-xs-none pt-70 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title section-title-white text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2><?php echo esc_html($title);?></h2>
                        <p><?php echo esc_html($description);?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <!-- Review Slider -->
                    <div class="review-slider-wraper position-relative">
                        <div class="swiper-container review-slider">
                            <div class="swiper-wrapper">
                                <!-- Single Review -->
                                <div class="swiper-slide">
                                    <div class="review-text">
                                        <p><?php echo esc_html($description_one);?> </p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="review-author-img">
                                        <?php 
  $review_image = wp_get_attachment_image_src($image_one,'full');

  if($review_image ){ ?>

   <img src="<?php echo esc_url($review_image[0]);?>" alt="">

  <?php
  }
?>
    
                                            
                                        </div>
                                        <div class="review-author-info">
                                            <ul class="list-inline">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span><strong><?php echo esc_html($title_one);?></strong></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Single Review -->

                                <!-- Single Review -->
                                <div class="swiper-slide">
                                    <div class="review-text">
                                        <p><?php echo esc_html($description_two);?></p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="review-author-img">
                                                                             <?php 
  $revie_image = wp_get_attachment_image_src($image_two,'full');

  if($revie_image ){ ?>

   <img src="<?php echo esc_url($revie_image[0]);?>" alt="">

  <?php
  }
?>
                                            
                                        </div>
                                        <div class="review-author-info">
                                            <ul class="list-inline">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span><strong><?php echo esc_html($title_two);?></strong></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Single Review -->




                            </div>
                        </div>
                        
                        <!-- Arrows 
                        <div class="swiper-button-next next-review">
                            <img src="img/icons/right-arrow.svg" alt="" class="svg">
                        </div>
                        <div class="swiper-button-prev prev-review">
                            <img src="img/icons/left-arrow.svg" alt="" class="svg">
                        </div>-->
                    </div>
                    <!-- End of Review Slider -->
                </div>
            </div>
        </div>
    </section>


    <?php
        
    return ob_get_clean();        



}
add_shortcode('review_section','ipvision_review_section');









?>