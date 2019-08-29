<?php 


function service_four_section(){

    vc_map(array(

        'name' => __('Service Four','ipvision'),
        'description' => 'this is slider addon',
        'base' => 'service_four_section',
        'category' => 'Ipvision',
        'icon' => get_theme_file_uri('/assets/img/icons/mission.jpg'),
        'params' =>array(

           

             array(
                        'param_name' =>'title',
                        'type' => 'textfield',
                        'heading' => 'Title'
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
                        'param_name' =>'title_five',
                        'type' => 'textfield',
                        'heading' => 'Title'
                    ),
                       array(
                        'param_name' =>'title_six',
                        'type' => 'textfield',
                        'heading' => 'Title'
                    ),
                       array(
                        'param_name' =>'title_seven',
                        'type' => 'textfield',
                        'heading' => 'Title'
                    ),
                       array(
                        'param_name' =>'title_eight',
                        'type' => 'textfield',
                        'heading' => 'Title'
                    ),
                       array(
                        'param_name' =>'title_nine',
                        'type' => 'textfield',
                        'heading' => 'Title'
                    ),
                    
                         array(
                        'param_name' =>'description',
                        'type' => 'textarea',
                        'heading' => 'Description'
                    ),
                         array(
                        'param_name' =>'description_one',
                        'type' => 'textarea',
                        'heading' => 'Description one'
                    ),
                           array(
                        'param_name' => 'image_one',
                        'type' => 'attach_image',
                        'heading' => 'this is slider image'
                    ),
                    

              


        )
    ));


}
add_action('vc_before_init','service_four_section');


function ipvision_service_four_section($attr){

    extract(
        shortcode_atts(array(
         
            'title' => '',
            'title_one' => '',
            'title_two' => '',
            'image_one' => '',
            'title_three' => '',
            'title_four' => '',
         
            'title_five' => '',
            'title_six' => '',
            'title_seven' => '',
            'title_eight' => '',
            'title_nine' => '',
     
            'description' => '',
            'description_one' => '',
         
        
          
           
        
        


        ),$attr)
    );
    ob_start();

    ?>

<section id='contact' class="pt-70 pb-70">
        <div class="container">
							<div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2><span><b><?php echo esc_html($title);?></b></span></h2>
						<h4><?php echo esc_html($title_one);?><br/> <?php echo esc_html($title_two);?></h4>
					</div>
            <div class="row align-items-center">
			    <div class="col-lg-6">
                    <div class="service-img text-center" data-animate="fadeInUp" data-delay=".4">
                        <?php 
  $service_four_image = wp_get_attachment_image_src($image_one,'full');

  if($service_four_image ){ ?>

   <img src="<?php echo esc_url($service_four_image[0]);?>" alt="" data-rjs="2">

  <?php
  }
?>
                    </div>
                </div>
			
                <div class="col-lg-6">
                    <div class="service-details" data-animate="fadeInUp" data-delay=".1">

                        <p><?php echo esc_html($description);?></p>
						<p><?php echo esc_html($description_one);?></p>
						<p><i><?php echo esc_html($title_three);?></i></p>
                        <ul class="rubik list-unstyled m-0 clearfix">
                            <li><?php echo esc_html($title_four);?></li>
                            <li><?php echo esc_html($title_five);?></li>
                            <li><?php echo esc_html($title_six);?></li>
                            <li><?php echo esc_html($title_seven);?></li>
                            <li><?php echo esc_html($title_eight);?></li>
                            <li><?php echo esc_html($title_nine);?></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php
        
    return ob_get_clean();        



}
add_shortcode('service_four_section','ipvision_service_four_section');









?>