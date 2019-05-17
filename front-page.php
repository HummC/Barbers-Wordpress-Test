
<?php get_header();?>
<!-- PAGE BANNER - SECTION START -->
    <section class="hero-banner d-flex justify-content-center p-4 p-md-0 align-items-center py-5 px-4"
    style="background-image:url(<?php $heroBanner = get_field('hero-banner__image'); echo $heroBanner['sizes']['pageBanner'];?>);">
      <div class="container">
          <div class="row">
              <!-- HERO BLOCK !-->
              <div class="hero-infobox col-md-6 col-lg-7 order-2 animated" data-anim="slideInLeft">
                <h1 class="hero-infobox__title">
                  <?php the_field('hero-banner__title');?>
                </h1>
                <p class="hero-infobox__description">
                  <?php the_field('hero-banner__description');?>
                </p>
                <div class="button-group d-flex">
                <a class="btn btn-primary" href="#">Call us</a>
                <a class="btn btn-outline-primary" href="#">Our work</a>
               </div>
              </div>

              <!-- CAROUSEL - STARTS -->
              <div id="carouselExampleIndicators" class="carousel slide order-1 col-md-6 col-lg-5" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo get_theme_file_uri('img/hair1.jpeg')?>" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo get_theme_file_uri('img/hair2.jpg')?>" data-src="holder.js/900x400?theme=industrial" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo get_theme_file_uri('img/hair3.jpeg')?>" data-src="holder.js/900x400?theme=industrial" alt="Second slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
          </div>
      </div>
</section>
<!-- ABOUT - SECTION START -->
<section class="about d-flex justify-content-center align-items-center py-5 px-4">
    <div class="container">
      <div class="row">
          <div class="company-info col-md-6 mb-5 mb-md-0 animated" data-anim="slideInLeft">
              <h3 class="company-info__title pb-2"> Bootstrap Barbers </h3>
              <p class="company-info__description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
                <a class="btn btn-primary" href="#">Learn More</a>
          </div>
          <div class="opening-times col-md-6 animated delay-2" data-anim="fadeIn">
            <table class="table">
              <thead>
                <tr>
                  <th>Day</th>
                  <th>From</th>
                  <th>To</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="day-column" scope="row">Mon</th>
                  <td>09:00</td>
                  <td>16:30</td>
                </tr>
                <tr>
                  <th class="day-column" scope="row">Tue</th>
                  <td>09:00</td>
                  <td>16:30</td>
                </tr>
                <tr>
                  <th class="day-column" scope="row">Wed</th>
                  <td>09:00</td>
                  <td>16:30</td>
                </tr>
                <tr>
                  <th class="day-column" scope="row">Thu</th>
                  <td>09:00</td>
                  <td>16:30</td>
                </tr>
                <tr>
                  <th class="day-column day-column--active" scope="row">Fri</th>
                  <td>09:00</td>
                  <td>16:30</td>
                </tr>
              </tbody>
              </table>
          </div>
      </div>
    </div>
</section>

<!-- FEATURED CUTS - SECTION START -->
<section class="featured-cuts py-5 px-4">
  <div class="container-fluid">
    <div class="row">
      <!-- FEATURED CUTS - HEADING -->
      <div class="featured-heading col-md-8 mx-auto text-center">
        <h2 class="featured-cuts__title"> Featured Cuts </h2>
        <p class="featured-cuts__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
    <div class="container">
      <div class="row">
            <!-- LIST OF CUTS - GRID CONTAINER -->
        <div class="grid-list d-flex  justify-content-center flex-wrap">
          <!-- LIST OF CUTS - GRID CONTAINER -->
          <?php
          $paged = (get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
          $the_query = new WP_Query( array(
          'post_type' => 'haircuts',
          'posts_per_page' => 4,
          'paged' => $paged
         ));
         if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();
          get_template_part('template_parts/content-cuts');
       endwhile;
         else :
         get_template_part('template_parts/content-none');
      endif;
       ?>
        </div>
</div>
<div class="col-12 text-center">
    <a class="btn btn-primary" href="#">View Gallery</a>
</div>
</div>
</div>
</section>

<!-- OUR TEAM - SECTION START -->
<section class="the-team  d-flex justify-content-center align-items-center py-5 px-4">
  <div class="container">
    <div class="row">
      <div class="col-md-5 pane-left">
        <picture>
          <source srcset="https://images.pexels.com/photos/1813272/pexels-photo-1813272.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" media="(min-width: 800px)">
          <img class="image-responsive" src="https://images.pexels.com/photos/1813272/pexels-photo-1813272.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
        </picture>
      </div>
      <div class="col-md-7 pane-right animated" data-anim="slideInLeft">
        <h3> Meet the barbers! </h3>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <a class="btn btn-primary" href="#">View Barbers</a>
      </div>
    </div>
  </div>
</section>
<div id="map"></div>
<?php get_footer();?>
