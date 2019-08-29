<?php 


function product_one_section(){

    vc_map(array(

        'name' => __('Product One','ipvision'),
        'description' => 'this is slider addon',
        'base' => 'product_one_section',
        'category' => 'Ipvision',
        'icon' => get_theme_file_uri('/assets/img/icons/video.jpg'),
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
                         array(
                        'param_name' => 'image_one',
                        'type' => 'attach_image',
                        'heading' => 'this is slider image'
                    ),
                   
                    
                     
                       
                        

              


        )
    ));


}
add_action('vc_before_init','product_one_section');


function ipvision_product_one_section($attr){

    extract(
        shortcode_atts(array(
         
            'title' => '',
            'description' => '',
            'image_one' => '',
          

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
                                                <?php 
  $product_one_image = wp_get_attachment_image_src($image_one,'full');

  if($product_one_image ){ ?>

   <img src="<?php echo esc_url($product_one_image[0]);?>" alt="" data-rjs="2">

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
add_shortcode('product_one_section','ipvision_product_one_section');









?>