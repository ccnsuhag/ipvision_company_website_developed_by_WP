<?php 


function about_section(){

    vc_map(array(

        'name' => __('About','ipvision'),
        'description' => 'this is slider addon',
        'base' => 'about_section',
        'category' => 'Ipvision',
         'icon' => get_theme_file_uri('/assets/img/icons/phone.jpg'),
        'params' =>array(

             array(
                        'param_name' => 'about_image',
                        'type' => 'attach_image',
                        'heading' => 'About image'
                 ),
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
                        'param_name' => 'view_link',
                        'type' => 'vc_link',
                        'heading' => 'Link'
                    ),
                     array(
                        'param_name' => 'image_one',
                        'type' => 'attach_image',
                        'heading' => 'image'
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
                        'heading' => 'image'
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
                     array(
                        'param_name' => 'image_three',
                        'type' => 'attach_image',
                        'heading' => 'image'
                 ),
                 array(
                        'param_name' =>'title_three',
                        'type' => 'textfield',
                        'heading' => 'Title'
                    ),
                    array(
                        'param_name' => 'description_three',
                        'type' => 'textarea',
                        'heading' => 'description'
                    ),
                     array(
                        'param_name' => 'image_four',
                        'type' => 'attach_image',
                        'heading' => 'image'
                 ),
                 array(
                        'param_name' =>'title_four',
                        'type' => 'textfield',
                        'heading' => 'Title'
                    ),
                    array(
                        'param_name' => 'description_four',
                        'type' => 'textarea',
                        'heading' => 'description'
                    ),

        )
    ));


}
add_action('vc_before_init','about_section');


function ipvision_about_section($attr){

    extract(
        shortcode_atts(array(
            'about_image' => '',
            'title' => '',
            'description' => '',
            'view_link' => '',
            'image_one' => '',
            'title_one' => '',
            'description_one' => '',
            'image_two' => '',
            'title_two' => '',
            'description_two' => '',
            'image_three' => '',
            'title_three' => '',
            'description_three' => '',
            'image_four' => '',
            'title_four' => '',
            'description_four' => '',
            

        ),$attr)
    );
    ob_start();

    ?>
<?php

	// Prepare the URL options for the view
	$url_options_string = $attr['view_link'];
	$url_options_array = explode( '|', $url_options_string );
	$url_options = array();
	foreach ( $url_options_array as $entry ) {
		$temp_array = explode( ':', $entry );
		$url_options[ $temp_array[0] ] = urldecode_deep( $temp_array[1] );
	}

?>

   <!-- Abut Us -->
    <section style="padding-top: 40px; !importent">
        <div class="container">
            <div class="row align-items-center pb-80">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="text-center" data-animate="fadeInUp" data-delay=".1">

                    <?php 
                    
                    $test_image=wp_get_attachment_image_src($about_image,'full');
                    if($test_image){
                    
                    ?>
                        <img src="<?php echo esc_url($test_image[0]);?>" alt="" data-rjs="2">

                        <?php } ?>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="number-one-content" data-animate="fadeInUp" data-delay=".5">
                        <h2 class="mb-3"><?php echo esc_html($title);?></h2>
                        <p><?php echo esc_html($description);?></p>
                        <a href="<?php echo $url = $url_options['url'];?>" class="btn">View Details</a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 col-sm-6">
                    <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".1">
                        <div class="single-feature-img">

                        <?php 
                    
                    $sec_image=wp_get_attachment_image_src($image_one,'full');
                    if($sec_image){
                    
                    ?>

                    <img src="<?php echo esc_url($sec_image[0]);?>" alt="" class="svg">
                  

                        <?php } ?>

                            
                        </div>
                        <div class="single-feature-content">
                            <h4><?php echo esc_html($title_one);?></h4>
                            <p><?php echo esc_html($description_one);?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".4">
                        <div class="single-feature-img">

                        <?php 
                    
                    $sec_image_two=wp_get_attachment_image_src($image_two,'full');
                    if($sec_image_two){
                    
                    ?>

               
                  <img src="<?php echo esc_url($sec_image_two[0]);?>" alt="" class="svg">

                        <?php } ?>
                            
                        </div>
                        <div class="single-feature-content">
                            <h4><?php echo esc_html($title_two);?></h4>
                            <p><?php echo esc_html($description_two);?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".7">
                        <div class="single-feature-img">

                         <?php 
                    
                    $sec_image_three=wp_get_attachment_image_src($image_three,'full');
                    if($sec_image_three){
                    
                    ?>

               <img src="<?php echo esc_url($sec_image_three[0]);?>" alt="" class="svg">
              

                        <?php } ?>
                            
                        </div>
                        <div class="single-feature-content">
                            <h4><?php echo esc_html($title_three);?></h4>
                            <p><?php echo esc_html($description_three);?></p>
                        </div>
                    </div>
                </div>
				<div class="col-md-3 col-sm-6">
                    <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".7">
                        <div class="single-feature-img">

                        <?php 
                    
                    $sec_image_four=wp_get_attachment_image_src($image_four,'full');
                    if($sec_image_four){
                    
                    ?>

               <img src="<?php echo esc_url($sec_image_four[0]);?>" alt="" class="svg">
              

                        <?php } ?>
                            <img style="height:56px; width:40px"src="img/icons/chat.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4><?php echo esc_html($title_four);?></h4>
                            <p><?php echo esc_html($description_four);?></p>
                        </div>
                    </div>
                </div>
				
            </div>
        </div>
    </section>



    <?php
        
    return ob_get_clean();        



}
add_shortcode('about_section','ipvision_about_section');









?>