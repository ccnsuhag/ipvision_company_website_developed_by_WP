<?php 


function faq_section(){

    vc_map(array(

        'name' => __('FAQ','ipvision'),
        'description' => 'this is slider addon',
        'base' => 'faq_section',
        'category' => 'Ipvision',
        'icon' => get_theme_file_uri('/assets/img/icons/data.jpg'),
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
                  'param_name' => 'faq_sec_grp',
                  'params' =>array(

                  
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
                array(
                        'param_name' => 'faq_image',
                        'type' => 'attach_image',
                        'heading' => 'this is faq image'
                    ),


        )
    ));


}
add_action('vc_before_init','faq_section');


function ipvision_faq_section($attr){

    extract(
        shortcode_atts(array(
            'faq_sec_grp' => '',
            'title' => '',
            'description' => '',
         
            'title_one' => '',
            'desc_one' => '',
            'faq_image' => '',


        ),$attr)
    );
    ob_start();

    ?>

<section class="pt-120 pb-70 secondary-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq pb-50" data-animate="fadeInUp" data-delay=".1">
                        <div class="section-title section-title-white">
                            <h2><?php echo esc_html($title);?></h2>
                            <p><?php echo esc_html($description);?></p>
                        </div>


                        <div class="accordion" id="accordionFaq">

<?php

$sec_faq_key=vc_param_group_parse_atts($faq_sec_grp);

foreach($sec_faq_key as $sec_faq_value){


?>
                            <div class="single-faq">
                                <div class="faq-title d-flex align-items-center">
                                    <h3 class="h5" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><?php echo esc_html($sec_faq_value['title_one']);?></h3>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionFaq">
                                    <div class="faq-answer">
                                        <p><?php echo esc_html($sec_faq_value['desc_one']);?></p>
                                    </div>
                                </div>
                            </div>


                          
    <?php } ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-50" data-animate="fadeInUp" data-delay=".4">
                    <?php 
  $sec_image = wp_get_attachment_image_src($faq_image,'full');

  if($sec_image ){ ?>

      <img src="<?php echo esc_url($sec_image[0]);?>" data-rjs="2" alt="">
   

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
add_shortcode('faq_section','ipvision_faq_section');









?>