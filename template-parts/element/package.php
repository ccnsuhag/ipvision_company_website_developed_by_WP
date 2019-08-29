<?php 


function package_section(){

    vc_map(array(

        'name' => __('Package','ipvision'),
        'description' => 'this is slider addon',
        'base' => 'package_section',
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
                  'type' => 'param_group',
                  'heading' => 'this is slider group',
                  'param_name' => 'package_sec_grp',
                  'params' =>array(

                    array(
                        'param_name' => 'package_image',
                        'type' => 'attach_image',
                        'heading' => 'this is package image'
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
                       

                  )
              ),


        )
    ));


}
add_action('vc_before_init','package_section');


function ipvision_package_section($attr){

    extract(
        shortcode_atts(array(
            'package_sec_grp' => '',
            'title' => '',
            'description' => '',
            'package_image' => '',
            'title_one' => '',
            'desc_one' => '',
           


        ),$attr)
    );
    ob_start();

    ?>
 
  <section class="pb-55" style="padding-top: 80px;">
        <div class="container">
      
            <!-- End of Packages -->

            <!-- Packages Includes -->
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2><?php echo esc_html($title);?></h2>
                        <p><?php echo esc_html($description);?></p>
                    </div>
                </div>
            </div>

            <div class="row">

            <div class="row">
<?php

$sec_package_key=vc_param_group_parse_atts($package_sec_grp);

foreach($sec_package_key as $sec_package_value){


?>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".05">
                        <div class="single-feature-img">
                        <?php 
                
                  $package_image=wp_get_attachment_image_src($sec_package_value['package_image'],'full');
                  if($package_image){
                
                ?>
                 <img src="<?php echo esc_url($package_image[0]);?>" alt="" class="svg">
           
                

                    <?php } ?>
                           
                        </div>
                        <div class="single-feature-content">
                            <h4><?php echo esc_html($sec_package_value['title_one']);?></h4>
                            <p> <?php echo esc_html($sec_package_value['desc_one']);?></p>
                        </div>
                    </div>
                </div>

       <?php } ?>

				
            </div>
            <!-- End of Packages Includes -->
        </div>
    </section>

    <?php
        
    return ob_get_clean();        



}
add_shortcode('package_section','ipvision_package_section');









?>