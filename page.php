<?php
  get_header();
  pageBanner();
  ?>
   <?php
  if(have_posts()) {
   while (have_posts()) : the_post();
    get_template_part('template_parts/content', 'page');
    // If comments are set to open, or at-least one comment exists for this page, load the comments template.
   // end of loop
   endwhile;
 }
 else {
      get_template_part('template_parts/content', 'none');
    }
   ?>
  <?php
    get_footer();
 ?>
