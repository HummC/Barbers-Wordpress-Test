

          <?php
          $theImage = get_field('hairstyle_image');
          if( !empty($theImage) ): ?>
          <article class="grid-item featured-cut col-md-6 col-lg-3 animated" data-anim="slideInUp">
            <div class="image-container gallery-image">
              <a data-caption="<?php echo $theImage['caption'];?>" data-fancybox="portfolio_hairstyles" href="<?php echo $theImage['url']; ?>"><img alt="<?php if($theImage['alt']) { echo $theImage['alt']; } else {echo 'Hairstyle portfolio image';}?>" src="<?php echo  $theImage['url']; ?>" /></a>
            </div>
          </article>

        <?php
        else :
          $theImage = array(
            'url' => 'https://images.pexels.com/photos/137595/pexels-photo-137595.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
            'alt' => 'placeholder image',
            'caption' => 'this is a placeholder image'
          );
          ?>
          <article class="grid-item featured-cut card col-md-6 col-lg-3">
            <div class="image-container">
              <a data-caption="<?php echo $theImage['caption'];?>" data-fancybox="portfolio_hairstyles" href="<?php echo $theImage['url']; ?>"><img alt="<?php if($theImage['alt']) { echo $theImage['alt']; } else {echo 'Hairstyle portfolio image';}?>"  src="<?php echo  $theImage['url']; ?>" /></a>
            </div>
          </article>
          <?php
        endif;
