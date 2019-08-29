<?php 


function aboutus_section(){

    vc_map(array(

        'name' => __('About US','ipvision'),
        'description' => 'this is slider addon',
        'base' => 'aboutus_section',
        'category' => 'Ipvision',
        'icon' => get_theme_file_uri('/assets/img/icons/voice.jpg'),
        'params' =>array(

            array(
                        'param_name' => 'aboutus_image',
                        'type' => 'attach_image',
                        'heading' => 'this is slider image'
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
                  'type' => 'param_group',
                  'heading' => 'this is slider group',
                  'param_name' => 'aboutus_sec_grp',
                  'params' =>array(

                    array(
                        'param_name' => 'image_one',
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
                    

                  )
              ),


        )
    ));


}
add_action('vc_before_init','aboutus_section');


function ipvision_aboutus_section($attr){

    extract(
        shortcode_atts(array(
            'aboutus_sec_grp' => '',
            'aboutus_image' => '',
            'title' => '',
            'description' => '',
            'image_one' => '',
            'title_one' => '',
            'desc_one' => '',
        


        ),$attr)
    );
    ob_start();

    ?>

 <section class="pt-120 pb-55">
        <div class="container">
            <div class="row align-items-center pb-4">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="text-center" data-animate="fadeInUp" data-delay=".1">
                    <?php 
  $fec_image = wp_get_attachment_image_src($aboutus_image,'full');

  if($fec_image ){ ?>

   <img src="<?php echo esc_url($fec_image[0]);?>" alt="" data-rjs="2">

  <?php
  }
?>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="number-one-content" data-animate="fadeInUp" data-delay=".3">
                        <h2 class="mb-3"><?php echo esc_html($title);?></h2>
                        <p style="text-align:justify"><?php echo esc_html($description);?> </p>

                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
            <div class="row">
<?php

$sec_aboutus_key=vc_param_group_parse_atts($aboutus_sec_grp);

foreach($sec_aboutus_key as $sec_aboutus_value){


?>

                <div class="col-md-4 col-sm-6">
                    <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".1">
                        <div class="single-feature-img">
                              <?php 
                
                  $feature_image=wp_get_attachment_image_src($sec_aboutus_value['image_one'],'full');
                  if($feature_image){
                
                ?>
                 <img src="<?php echo esc_url($feature_image[0]);?>" alt="" class="svg">
                

                    <?php } ?>

                            
                        </div>
                        <div class="single-feature-content">
                            <h4><?php echo esc_html($sec_aboutus_value['title_one']);?></h4>
                            <p style="text-align:justify"><?php echo esc_html($sec_aboutus_value['desc_one']);?>
                        </div>
                    </div>
                </div>

                   <?php } ?>


            </div>
        </div>
    </section>

    <?php
        
    return ob_get_clean();        



}
add_shortcode('aboutus_section','ipvision_aboutus_section');









?>