<?php 


function service_one_section(){

    vc_map(array(

        'name' => __('Service One','ipvision'),
        'description' => 'this is slider addon',
        'base' => 'service_one_section',
        'category' => 'Ipvision',
        'icon' => get_theme_file_uri('/assets/img/icons/mission.jpg'),
        'params' =>array(

           

             array(
                        'param_name' =>'title',
                        'type' => 'textfield',
                        'heading' => 'Title'
                    ),
                    array(
                        'param_name' =>'title_ti',
                        'type' => 'textfield',
                        'heading' => 'Title'
                    ),
                    array(
                        'param_name' => 'description',
                        'type' => 'textarea',
                        'heading' => 'description'
                    ),
                      array(
                        'param_name' => 'description_one',
                        'type' => 'textarea',
                        'heading' => 'description'
                    ),
                      array(
                        'param_name' => 'description_two',
                        'type' => 'textarea',
                        'heading' => 'description'
                    ),
                     array(
                        'param_name' =>'title_one',
                        'type' => 'textfield',
                        'heading' => 'Title'
                    ),
                     array(
                        'param_name' =>'title_two',
                        'type' => 'textfield',
                        'heading' => 'Title'
                    ),
                     array(
                        'param_name' =>'title_three',
                        'type' => 'textfield',
                        'heading' => 'Title'
                    ),
                     array(
                        'param_name' =>'title_four',
                        'type' => 'textfield',
                        'heading' => 'Title'
                    ),
                    array(
                        'param_name' => 'image_one',
                        'type' => 'attach_image',
                        'heading' => 'this is slider image'
                    ),

              


        )
    ));


}
add_action('vc_before_init','service_one_section');


function ipvision_service_one_section($attr){

    extract(
        shortcode_atts(array(
         
            'title' => '',
            'title_ti' => '',
            'description' => '',
            'description_one' => '',
            'description_two' => '',
            'title_one' => '',
            'title_two' => '',
            'title_three' => '',
            'title_four' => '',
            'image_one' => '',
           
        
        


        ),$attr)
    );
    ob_start();

    ?>
<section id='streaming' class="pt-70 pb-70 light-bg">
        <div class="container">
					<div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2><span><b><?php echo esc_html($title);?></b></span></h2>
				
                        <h4><?php echo esc_html($title_ti);?><br/><?php echo esc_html($description);?></h4>
					</div>
            <div class="row align-items-center">
			
                <div class="col-lg-6">
                    <div class="service-details" data-animate="fadeInUp" data-delay=".1">
                        <p><?php echo esc_html($description_one);?></p>
                        <p><i><?php echo esc_html($description_two);?> </i></p>
                        <ul class="rubik list-unstyled m-0 clearfix">
                            <li><?php echo esc_html($title_one);?></li>
                            <li><?php echo esc_html($title_two);?></li>
                            
                            <li><?php echo esc_html($title_three);?></li>
                            <li><?php echo esc_html($title_four);?></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-img text-center" data-animate="fadeInUp" data-delay=".4">
                                        <?php 
  $service_image = wp_get_attachment_image_src($image_one,'full');

  if($service_image ){ ?>

   <img src="<?php echo esc_url($service_image[0]);?>" alt="" data-rjs="2">

  <?php
  }
?>
   
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        
    return ob_get_clean();        



}
add_shortcode('service_one_section','ipvision_service_one_section');









?>