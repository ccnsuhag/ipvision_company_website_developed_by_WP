<?php 


function banner_section(){

    vc_map(array(

        'name' => __('slider','ipvision'),
        'description' => 'this is slider addon',
        'base' => 'banner_section',
        'category' => 'Ipvision',
         'icon' => get_theme_file_uri('/assets/img/icons/server.jpg'),
        'params' =>array(

              array(
                  'type' => 'param_group',
                  'heading' => 'this is slider group',
                  'param_name' => 'slider_sec_grp',
                  'params' =>array(

                    array(
                        'param_name' => 'slider_image',
                        'type' => 'attach_image',
                        'heading' => 'this is slider image'
                    ),
                    array(
                        'param_name' =>'title_one',
                        'type' => 'textfield',
                        'heading' => 'Title one'
                    ),
                    array(
                        'param_name' => 'title_two',
                        'type' => 'textfield',
                        'heading' => 'title two'
                    ),
                       array(
                        'param_name' => 'title_desc',
                        'type' => 'textarea',
                        'heading' => 'description'
                    ),
                     array(
                        'param_name' => 'banner_image',
                        'type' => 'attach_image',
                        'heading' => 'this is slider image'
                    ),

                  )
              ),


        )
    ));


}
add_action('vc_before_init','banner_section');


function ipvision_slider_section($attr){

    extract(
        shortcode_atts(array(
            'slider_sec_grp' => '',
            'slider_image' => '',
            'title_one' => '',
            'title_two' => '',
            'title_desc' => '',
            'banner_image' => '',


        ),$attr)
    );
    ob_start();

    ?>


 <section>
        <div class="main-slider swiper-container">
            <div class="swiper-wrapper">
                <!-- Single slide -->

<?php

$sec_slide_key=vc_param_group_parse_atts($slider_sec_grp);

foreach($sec_slide_key as $sec_slide_value){


?>

                <div class="swiper-slide position-relative" >
                
                <?php 
                
                  $test_image=wp_get_attachment_image_src($sec_slide_value['slider_image'],'full');
                  if($test_image){
                
                ?>
                    <img src="<?php echo esc_url($test_image[0]);?>" data-rjs="2" alt="">

                    <?php } ?>

                    <div class="slide-content container" >
                        <div class="row align-items-center">
						
                            <div class="col-xl-6 col-lg-8">
                                <div class="slide-content-inner">
                                    <h2 data-animate="fadeInUp" data-delay=".5" style="font-family:Rajdhani; font-size:36px; margin-bottom: 0px !importent;"><?php echo esc_html($sec_slide_value['title_one']);?></h2>
                                    <h2 data-animate="fadeInUp" data-delay=".7" style="font-family:Rajdhani !importent; font-weight:400; margin-bottom: 5px !importent;"><?php echo esc_html($sec_slide_value['title_two']);?></h2>
									<h4 data-animate="fadeInUp" data-delay=".9"><?php echo esc_html($sec_slide_value['title_desc']);?></h4>
                                    <!--<a data-animate="fadeInUp" data-delay=".6" href="#" class="btn">Learn More</a>-->
                                </div>
                            </div>
							<div class="col-lg-6">
									<div class="service-img text-center" style="margin-top:-300px" data-animate="fadeInUp" data-delay="1">

                                    <?php 
                
                  $banner_image=wp_get_attachment_image_src($sec_slide_value['banner_image'],'full');
                  if($banner_image){
                
                ?>
                  <img src="<?php echo esc_url($banner_image[0]);?>" alt="" data-rjs="2">
                

                    <?php } ?>
									
									</div>
							</div>
							 
                        </div>
                    </div>
                </div>
                <!-- End of Single slide -->
				
<?php 

}

?>

                
               
            </div>
            <!-- Banner Pagination -->
            <div class="swiper-pagination main-slider-pagination"></div>
        </div>
    </section>
    <!-- End of Banner -->



    <?php
        
    return ob_get_clean();        



}
add_shortcode('banner_section','ipvision_slider_section');









?>