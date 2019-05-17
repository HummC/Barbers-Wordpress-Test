

<section class="content-area">
<div class="container">
<div class="row">
<main class="content col-12 px-4 py-5">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<div class="row">
      <div class="meta-links align-items-md-start justify-content-md-start btn-group col-12">
        <a href="<?php echo site_url('/the-barbers');?>" class="btn btn-primary"> Back to Barbers </a>
          <a class="btn btn-primary btn-primary--disabled"> <?php the_title();?> </a>
      </div>
    </div>
		<div class="member-bio col-md-8 px-5 py-5">
              <h2 class="member-bio__title"> <?php the_title();?>'s Bio </h2>
              <p class="member-bio__description">
              <?php the_content();?>
              </p>
    </div>
		<?php
			?>
	</div><!-- .entry-content -->
</article>
<section class="other-barbers">
	<div class="container">
		<div class="row">
			<!-- Swiper -->
			<div class="row">
				<div class="grid-list d-flex flex-wrap justify-content-center">
					 <?php
						// Custom Query - Uploaded Hairstyle Images
						$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
						$customQuery = new WP_Query(array(
							'post_type' => 'Member',
							'posts_per_page' => 4,
							'post__not_in' => array(get_the_ID()),
							'paged' => $paged
						));
						if($customQuery->have_posts()) :
						while($customQuery->have_posts()) :
							$customQuery->the_post();
							$theImage = get_field('hairstyle_image');
							?>

							<!-- get template part - card-member  -->

							<!-- get template part - card-member  -->

							<?Php $theImage = get_field('member_image'); ?>
							<article class="grid-item card animated" data-anim="slideInUp">
							  <a href="<?php the_permalink();?>" title="View <?php the_title();?>'s profile"> <div class="image-container">
							   <img class="card-img-top lazyload" src="<?php echo $theImage['url'];?>" alt="<?php echo $theImage['caption'];?>"
							   data-sizes="auto"
							   data-srcset="<?php echo $theImage['url'];?> 450w,<?php echo $theImage['url'];?>
							   640w,<?php echo $theImage['url'];?> 1080w">
							   </div></a>
							    <div class="card-body d-flex">
							      <div class="barber-header-info">
							      <a href="<?php the_permalink();?>"><h4 class="card-title"><?php the_title();?></h4></a>
							      <p><?php the_field('job_title');?></p>
							     </div>
							      <div class="barber-header-icon">
							        <i class="fas fa-cut barber-cut__icon"></i>
							        <span class="barber-cuts-value"> <?php the_field('years_of_experience');?>yrs </span>
							    </div>
							    </div>
							    <div class="card-footer">
							      <a href="#" class="link-regular" target="_blank" title="email carl humm"> <?php the_field('member_email');?> </a>
							    </div>
							</article>

						<?php
						endwhile;
						echo paginate_links(array(
							'total' => $customQuery->max_num_pages
						));
						endif;
						?>
		</div>
	</div>
</section>
</main>
</div>
</div>
</section>
