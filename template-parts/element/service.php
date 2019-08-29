<?php 


function service_section(){

    vc_map(array(

        'name' => __('Service','ipvision'),
        'description' => 'this is slider addon',
        'base' => 'service_section',
        'category' => 'Ipvision',
        'icon' => get_theme_file_uri('/assets/img/icons/earth.jpg'),
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
                  'type' => 'param_group',
                  'heading' => 'this is slider group',
                  'param_name' => 'service_sec_grp',
                  'params' =>array(

                    array(
                        'param_name' => 'service_image',
                        'type' => 'attach_image',
                        'heading' => 'this is slider image'
                    ),
                    array(
                        'param_name' =>'title_one',
                        'type' => 'textfield',
                        'heading' => 'Title one'
                    ),
                    array(
                        'param_name' => 'desc_one',
                        'type' => 'textarea',
                        'heading' => 'title two'
                    ),
                       array(
                        'param_name' => 'button_link',
                        'type' => 'vc_link',
                        'heading' => 'Link'
                    ),

                  )
              ),


        )
    ));


}
add_action('vc_before_init','service_section');


function ipvision_service_section($attr){

    extract(
        shortcode_atts(array(
            'service_sec_grp' => '',
            'title' => '',
            'description' => '',
            'service_image' => '',
            'title_one' => '',
            'desc_one' => '',
            'button_link' => '',


        ),$attr)
    );
    ob_start();

    ?>
<?php

	// Prepare the URL options for the view
	$url_options_string = $attr['button_link'];
	$url_options_array = explode( '|', $url_options_string );
	$url_options = array();
	foreach ( $url_options_array as $entry ) {
		$temp_array = explode( ':', $entry );
		$url_options[ $temp_array[0] ] = urldecode_deep( $temp_array[1] );
	}

?>

    <section class="theme-bg-overlay bg-img-md-none pb-90" style="padding-top: 80px;" data-bg-img="img/rocket.jpg" data-rjs="2">
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
<?php

$sec_service_key=vc_param_group_parse_atts($service_sec_grp);

foreach($sec_service_key as $sec_service_value){


?>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-service single-service-white text-center" data-animate="fadeInUp" data-delay=".1">
                     <?php 
                
                  $service_image=wp_get_attachment_image_src($sec_service_value['service_image'],'full');
                  if($service_image){
                
                ?>
                  <img src="<?php echo esc_url($service_image[0]);?>" alt="" class="svg">
                

                    <?php } ?>

                  
                        <h4><?php echo esc_html($sec_service_value['title_one']);?></h4>
                        <p><?php echo esc_html($sec_service_value['desc_one']);?></p>
                        <a href="<?php echo $url = $url_options['url'];?>">Learn More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>

                  <?php } ?>

            </div>
        </div>
    </section>
   


    <?php
        
    return ob_get_clean();        



}
add_shortcode('service_section','ipvision_service_section');









?>