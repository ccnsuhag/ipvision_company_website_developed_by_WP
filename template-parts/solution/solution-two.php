<?php 


function solution_two_section(){

    vc_map(array(

        'name' => __('Solution Two','ipvision'),
        'description' => 'this is slider addon',
        'base' => 'solution_two_section',
        'category' => 'Ipvision',
        'icon' => get_theme_file_uri('/assets/img/icons/tv.jpg'),
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
                        'param_name' => 'image_one',
                        'type' => 'attach_image',
                        'heading' => 'this is slider image'
                    ),
                    
                   array(
                        'param_name' =>'description',
                        'type' => 'textarea',
                        'heading' => 'Description'
                    ),
                     
                      array(
                        'param_name' =>'description_one',
                        'type' => 'textarea',
                        'heading' => 'Description'
                    ),
                     
                      
                      array(
                        'param_name' =>'description_two',
                        'type' => 'textarea',
                        'heading' => 'Description'
                    ),
                     
                      array(
                        'param_name' =>'description_three',
                        'type' => 'textarea',
                        'heading' => 'Description'
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
                     
                      
             

        )
    ));


}
add_action('vc_before_init','solution_two_section');


function ipvision_solution_two_section($attr){

    extract(
        shortcode_atts(array(
         
            'title' => '',
            'title_one' => '',
            'title_two' => '',
            'image_one' => '',
            'description' => '',
            'description_one' => '',
            'description_two' => '',
            'description_three' => '',
            'title_three' => '',
            'title_four' => '',
            'title_five' => '',
            'title_six' => '',
            'title_seven' => '',
            
           

        ),$attr)
    );
    ob_start();

    ?>

 
<section id='artificial' class="pt-70 pb-70 light-bg">
        <div class="container">
							<div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2><span><b><?php echo esc_html($title);?></b></span></h2>
						<h4><?php echo esc_html($title_one);?><br/> <?php echo esc_html($title_two);?></h4>
					</div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="service-img text-center" data-animate="fadeInUp" data-delay=".4">
                        <?php 
  $solution_one_image = wp_get_attachment_image_src($image_one,'full');

  if($solution_one_image ){ ?>

   <img src="<?php echo esc_url($solution_one_image[0]);?>" alt="" data-rjs="2">

  <?php
  }
?>
                    </div>
                </div>
				<div class="col-lg-6">
                    <div class="service-details" data-animate="fadeInUp" data-delay=".1">
                        <p><?php echo esc_html($description);?> </p>
						<p><?php echo esc_html($description_one);?> </p>
						<p><?php echo esc_html($description_two);?></p>
						<p><i><?php echo esc_html($description_three);?></i></p>
                        <h4><?php echo esc_html($title_three);?></h4>
						<ul class="rubik list-unstyled m-0 clearfix">
                            <li><?php echo esc_html($title_four);?></li>
                            <li><?php echo esc_html($title_five);?></li>
                            <li><?php echo esc_html($title_six);?></li>
                            <li><?php echo esc_html($title_seven);?></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php
        
    return ob_get_clean();        



}
add_shortcode('solution_two_section','ipvision_solution_two_section');









?>