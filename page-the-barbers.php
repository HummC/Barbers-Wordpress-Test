<?php
  get_header();
  while(have_posts()) {
    the_post();
    pageBanner();
    ?>
   <section class="content-area">
   <div class="container">
   <div class="row">
   <main class="content col-12 px-4 py-5">
       <section class="our-barbers">
             <!-- Barbers and Team Members -->
           <div class="row">
             <div class="grid-list d-flex flex-wrap justify-content-center">
               <?php
                // Custom Query - Uploaded Hairstyle Images
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $customQuery = new WP_Query(array(
                  'post_type' => 'Member',
                  'paged' => $paged
                ));
                if($customQuery->have_posts()) :
                while($customQuery->have_posts()) :
                  $customQuery->the_post();
                  $theImage = get_field('hairstyle_image');
                  get_template_part('template_parts/content-member');
                endwhile;
                echo paginate_links(array(
                  'total' => $customQuery->max_num_pages
                ));
                endif;
                ?>
           </div>
           </div>
         </div>
       </section>
   </main>
   <section class="barber-statistics" data-counter>
      <div class="container-fluid">
          <div class="row">
              <div class="barber-stats" style="background-image:url(<?php echo get_theme_file_uri('img/cuts.jpg')?>)">
                <i class="fas fa-cut"></i>
                <h3 id="first" class="counter" data-count data-number="5437"></h3>
                <span> Cuts Performed</span>
              </div>
                  <div class="barber-stats" style="background-image:url(<?php echo get_theme_file_uri('img/child.jpg')?>)">
                <i class="fas fa-pound-sign"></i>
                <h3 id="second" class="counter" data-count data-number="25" data-suffix="%"></h3>
                <span> Cheaper rates for children & elderly </span>
              </div>
                  <div class="barber-stats" style="background-image:url(<?php echo get_theme_file_uri('img/convo.jpg')?>)">
                  <i class="fas fa-comments"></i>
                <h3 id="third" class="counter" data-count data-number="1000"></h3>
                <span> Hours listening to you</span>
              </div>
          </div>
      </div>
   </section>
   <div id="map"></div>
 </div>
</div>
 </section>
  <?php
  }
    get_footer();
 ?>
