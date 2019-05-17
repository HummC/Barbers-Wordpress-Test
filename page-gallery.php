<?php
  get_header();
  while(have_posts()) {
    the_post();
    pageBanner(Array(
      'title' => '',
      'tagline' => '',
      'image' => ''
    ));
  ?>
   <!-- get template part content for content area -->
   <section class="content-area">
   <div class="container">
   <div class="row">
   <main class="content col-12 px-4 py-5">
     <div class="grid-list d-flex flex-wrap justify-content-center">
     <?php
     // Page Editor
     the_content();

     // Custom Query - Uploaded Hairstyle Images
     $posts_per_page = get_option( 'posts_per_page' );
     $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
     $customQuery = new WP_Query(array(
       'post_type' => 'haircuts',
       'posts_per_page' => $posts_per_page,
       'paged' => $paged
     ));
     if($customQuery->have_posts()) :
     while($customQuery->have_posts()) :
       $customQuery->the_post();
       $theImage = get_field('hairstyle_image');
       get_template_part('template_parts/content-cuts');
     endwhile;
     echo paginate_links(array(
       'total' => $customQuery->max_num_pages
     ));
     endif;
      ?>
    </div>
   </main>
 </div>
</div>
 </section>
  <?php
}
    get_footer();
 ?>
