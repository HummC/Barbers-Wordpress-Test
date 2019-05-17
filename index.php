<?php
  get_header();
  ?>
    <section class="page-banner">
     <div class="container">
       <div class="row">
           <div class="page-header text-center mx-auto d-flex flex-column">
             <h1 class="page-header__title"> The Barbers Corner </h1>
             <p class="page-header__tagline"> Advice on hair styling, product use and the daily life of our barbershop! </p>
           </div>
       </div>
     </div>
   </section>
   <section class="content-area">
   <div class="container">
   <div class="row">
   <main class="content col-12 px-4 py-5">
     <?php
     while(have_posts()) {
       the_post(); ?>
       <!-- get_template_part('template_parts/content', get_post_type() -->
    <h2>
      <a href="<?php the_permalink();?>">
      <?php the_title();?>
    </a>
     </h2>
     <span> Posted by: <?php the_author_posts_link();?> in <?Php echo get_the_category_list(', ');?></span>
       <?php } ?>
   </main>
 </div>
</div>
 </section>

 <?Php
    get_footer();
 ?>
