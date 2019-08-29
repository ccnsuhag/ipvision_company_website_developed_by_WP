<?php 


function service_header_section(){

    vc_map(array(

        'name' => __('Service Header','ipvision'),
        'description' => 'this is slider addon',
        'base' => 'service_header_section',
        'category' => 'Ipvision',
        'icon' => get_theme_file_uri('/assets/img/icons/mission.jpg'),
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

              


        )
    ));


}
add_action('vc_before_init','service_header_section');


function ipvision_service_header_section($attr){

    extract(
        shortcode_atts(array(
         
            'title' => '',
            'description' => '',
        
        


        ),$attr)
    );
    ob_start();

    ?>
<section class="pt-50 pb-30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2><?php echo esc_html($title);?></h2>
                        <p><?php echo esc_html($description);?></p>
                    </div>
                </div>
            </div>
			</div>
			    </section>

    <?php
        
    return ob_get_clean();        



}
add_shortcode('service_header_section','ipvision_service_header_section');









?>