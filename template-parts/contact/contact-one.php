<?php 


function contact_one_section(){

    vc_map(array(

        'name' => __('Contact One','ipvision'),
        'description' => 'this is slider addon',
        'base' => 'contact_one_section',
        'category' => 'Ipvision',
        'icon' => get_theme_file_uri('/assets/img/icons/voice.jpg'),
        'params' =>array(

             array(
                        'param_name' =>'description',
                        'type' => 'textarea',
                        'heading' => 'Description'
                    ), 

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
           
        )
    ));


}
add_action('vc_before_init','contact_one_section');


function ipvision_contact_one_section($attr){

    extract(
        shortcode_atts(array(
         
            'description' => '',
            'title' => '',
            'title_one' => '',
            'title_two' => '',
         
           
            'title_three' => '',
            'title_four' => '',
            'title_five' => '',
     

        ),$attr)
    );
    ob_start();

    ?>

  
  <section class="pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Map -->
                    <div class="map" data-animate="fadeInUp" data-delay=".1" data-trigger="map" data-map-options='{"latitude": "45.4407354", "longitude": "-73.6235452", "zoom": "15", "api_key": "AIzaSyCjkssBA3hMeFtClgslO2clWFR6bRraGz0"}'></div>
                </div>
                <div class="col-lg-4">
                    <!-- Map description -->
                    <div class="map-description light-bg d-flex align-items-center" data-animate="fadeInUp" data-delay=".4">
                        <p><?php echo esc_html($description);?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-contacts-widget-wrapper light-bg d-flex align-items-center" data-animate="fadeInUp" data-delay=".1">
                        <!-- Contact Info -->
                        <div class="page-contacts-widget">
                            <h3 class="h4"><?php echo esc_html($title);?></h3>
                            <div class="contact-widget-content">
                                <p> <?php echo esc_html($title_one);?> </p>
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <a href="tel:+1 514 368 9000 "><?php echo esc_html($title_two);?> </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        <a href="mailto:info@ipvision.ca"><?php echo esc_html($title_three);?></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <span><?php echo esc_html($title_four);?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- Contact Form -->
                    <div class="contact-form parsley-validate-wrap mt-60" data-animate="fadeInUp" data-delay=".4">
                        <h3 class="bordered-title"><?php echo esc_html($title_five);?></h3>
                        <div class="form-response"></div>


                      <?php 
                      
                      echo do_shortcode( '[contact-form-7 id="94" title="Contact form 1"]' );
                      
                      ?>
                        


                    </div>
                    <!-- End of Contact Form -->
                </div>
            </div>
        </div>
    </section>

    <?php
        
    return ob_get_clean();        



}
add_shortcode('contact_one_section','ipvision_contact_one_section');









?>