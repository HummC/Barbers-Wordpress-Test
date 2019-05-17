<?php
  get_header();
  pageBanner();
  ?>
   <section class="content-area">
   <div class="container">
   <div class="row">
   <main class="content col-12 px-4 py-5">
   <?php
   if(have_posts()) {
   while (have_posts()) : the_post();
    get_template_part('template_parts/content', 'archive');
    // If comments are set to open, or at-least one comment exists for this page, load the comments template.
    if(comments_open() || get_comments_number()) :
      comments_template();
    endif;
   // end of loop
   endwhile;
 }
 else {
      get_template_part('template_parts/content', 'none');
    }
   ?>
   </main>
 </div>
</div>
 </section>
  <?php
    get_footer();
 ?>
