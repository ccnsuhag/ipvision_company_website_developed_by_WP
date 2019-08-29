<?php 



   

function ipvision_enqueue(){

  wp_enqueue_style('ipvision-googleapis','https://fonts.googleapis.com/css?family=Rubik:400,500,700%7CSource+Sans+Pro:300i,400,400i,600,700');
  wp_enqueue_style('ipvision-Nunito','https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i');
  wp_enqueue_style('ipvision-family','https://fonts.googleapis.com/css?family=Rajdhani');


  wp_enqueue_style('ipvision-bootstrap',get_theme_file_uri('assets/css/bootstrap.min.css'),null,'2.0');
  wp_enqueue_style('ipvision-awesome',get_theme_file_uri('assets/css/font-awesome.min.css'),null,'2.0');
  wp_enqueue_style('ipvision-swiper',get_theme_file_uri('assets/plugins/swiper/swiper.min.css'),null,'2.0');
  wp_enqueue_style('ipvision-magnific',get_theme_file_uri('assets/plugins/magnific-popup/magnific-popup.min.css'),null,'2.0');
  wp_enqueue_style('ipvision-switcher',get_theme_file_uri('assets/plugins/color-switcher/color-switcher.css'),null,'2.0');
  wp_enqueue_style('ipvision-style-css',get_theme_file_uri('assets/css/style.css'),null,'2.0');
  wp_enqueue_style('ipvision-responsive',get_theme_file_uri('assets/css/responsive.css'),null,'2.0');
  wp_enqueue_style('ipvision-colors',get_theme_file_uri('assets/css/colors/theme-color-1.css'),null,'2.0');
  wp_enqueue_style('ipvision-custom',get_theme_file_uri('assets/css/custom.css'),null,'2.0');

  wp_enqueue_style('ipvision-style',get_stylesheet_uri());




  wp_enqueue_script('ipvision-jquery',get_theme_file_uri('assets/js/jquery-3.3.1.min.js'),array('jquery'),null,'2.0');
  wp_enqueue_script('ipvision-bundle',get_theme_file_uri('assets/js/bootstrap.bundle.min.js'),array('jquery'),null,'2.0');
  wp_enqueue_script('ipvision-waypoints',get_theme_file_uri('assets/plugins/waypoints/jquery.waypoints.min.js'),array('jquery'),null,'2.0');
  wp_enqueue_script('ipvision-sticky',get_theme_file_uri('assets/plugins/waypoints/sticky.min.js'),array('jquery'),null,'2.0');
  wp_enqueue_script('ipvision-swiper-js',get_theme_file_uri('assets/plugins/swiper/swiper.min.js'),array('jquery'),null,'2.0');
  wp_enqueue_script('ipvision-magnific-js',get_theme_file_uri('assets/plugins/magnific-popup/jquery.magnific-popup.min.js'),array('jquery'),null,'2.0');
  wp_enqueue_script('ipvision-parsley',get_theme_file_uri('assets/plugins/parsley/parsley.min.js'),array('jquery'),null,'2.0');
  wp_enqueue_script('ipvision-retinajs',get_theme_file_uri('assets/plugins/retinajs/retina.min.js'),array('jquery'),null,'2.0');
  wp_enqueue_script('ipvision-isotope',get_theme_file_uri('assets/plugins/isotope/isotope.pkgd.min.js'),array('jquery'),null,'2.0');
  wp_enqueue_script('ipvision-min-js',get_theme_file_uri('assets/js/menu.min.js'),array('jquery'),null,'2.0');
  wp_enqueue_script('ipvision-scripts',get_theme_file_uri('assets/js/scripts.js'),array('jquery'),null,'2.0');
  wp_enqueue_script('ipvision-custom',get_theme_file_uri('assets/js/custom.js'),array('jquery'),null,'2.0');
  
 

}
add_action('wp_enqueue_scripts','ipvision_enqueue');






?>