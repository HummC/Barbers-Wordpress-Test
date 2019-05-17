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
