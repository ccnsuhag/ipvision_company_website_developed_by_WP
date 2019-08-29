<?php 


function solution_one_section(){

    vc_map(array(

        'name' => __('Solution One','ipvision'),
        'description' => 'this is slider addon',
        'base' => 'solution_one_section',
        'category' => 'Ipvision',
        'icon' => get_theme_file_uri('/assets/img/icons/tv.jpg'),
        'params' =>array(

           

             array(
                        'param_name' =>'title',
                        'type' => 'textfield',
                        'heading' => 'Title'
                    ),
                   
                      array(
                        'param_name' =>'description',
                        'type' => 'textarea',
                        'heading' => 'Description'
                    ),
                     
                      
             

        )
    ));


}
add_action('vc_before_init','solution_one_section');


function ipvision_solution_one_section($attr){

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
                        <p><?php echo esc_html($description);?> </p>
                    </div>
                </div>
            </div>
			</div>
			    </section>

    <?php
        
    return ob_get_clean();        



}
add_shortcode('solution_one_section','ipvision_solution_one_section');









?>