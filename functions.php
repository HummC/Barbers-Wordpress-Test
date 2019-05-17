<?php
function pageBanner($args = NULL) {
  if(!$args['title']) {
    $args['title'] = get_the_title();
  }

  if (!$args['tagline']) {
    $args['tagline'] = get_field('tagline');
  }

  if(!$args['image']) {
    if (get_field('page-banner__image')) {
      $args['image'] = get_field('page-banner__image')['sizes']['pageBanner'];
  }
  else {
      $args['image'] = get_theme_file_uri('img/page-banner.jpeg');
  }
}
  ?>
  <section class="page-banner" style="background-image:url(<?php echo $args['image']?>);">
   <div class="container">
     <div class="row">
         <div class="page-header mx-auto d-flex">
           <?php if(is_singular('member')) {
             ?>
             <div class="page-header__avatar">
              <div class="image-container-medium">
                <img src="<?php echo get_field('member_image')['url'];?>" alt="member-picture">
              </div>
            </div>
             <?php
           }
           ?>
           <div class="page-header__textarea d-flex flex-column justify-content-center ml-3">
           <h1 class="page-header__title"> <?php echo $args['title']?> </h1>
           <p class="page-header__tagline"> <?php echo $args['tagline']?></p>
         </div>
       </div>
     </div>
   </div>
 </section>
  <?php
}


// RESOURCE LINKS FOR SCRIPTS & STYLES
function barber_resource_links() {
  wp_enqueue_script('barber-custom-scripts', get_theme_file_uri('/assets/js/custom.js'), NULL, '1.0', true);
  wp_enqueue_script('jquery-slim', 'https://code.jquery.com/jquery-3.2.1.slim.min.js');
  wp_enqueue_script('bootstrap-scripts-cdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
  wp_enqueue_script('lazysizes-js', get_theme_file_uri('/assets/vendor/lazysizes.min.js'), NULL, '4.1.6', true);
  if(is_page('the-barbers') OR is_front_page()) {
  wp_enqueue_script('leafletJS', get_theme_file_uri('/assets/vendor/leaflet.js'), NULL, '1.4.0', true);
  wp_enqueue_style('leafletCSS', get_theme_file_uri('/assets/vendor/leaflet.css'));
  wp_enqueue_script('countings-script',  'https://cdnjs.cloudflare.com/ajax/libs/countup.js/1.8.2/countUp.min.js');
  wp_enqueue_script('mapJS', get_theme_file_uri('/assets/js/map.js'), NULL, '1.0', true);
}
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:900|Raleway', false ); 
  wp_enqueue_style('bootstrap-styles-cdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
  wp_enqueue_style('bootstrap-fontawesome-cdn', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css');
  wp_enqueue_style('barber-custom-styles', get_stylesheet_uri());
  wp_enqueue_script('fancyJS', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js');
  wp_enqueue_style('fancyCSS','https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css');
  wp_enqueue_style('swiperCSS', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css');
  wp_enqueue_script('swiperJS', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js');
}
add_action('wp_enqueue_scripts', 'barber_resource_links');

// CUSTOM FEATURES - APPEND TITLE OF CURRENT PAGE TO TITLE
function barber_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('pageBanner', 1500, 350, true);
}
add_action('after_setup_theme', 'barber_features');
 ?>
