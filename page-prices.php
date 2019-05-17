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
     <section class="offer-banner">
       <div class="row justify-content-center">
         <div class="offer-banner__wrapper d-flex flex-column align-items-center">
         <h2> Great cuts at affordable prices! </h2>
         <p>  Get in touch, and book your cut today </p>
         <a class="btn btn-primary" href="#">Call Bootstrap Barbers</a>
         </div>
       </div>
     </section>
    <section class="price-list">
        <h3> Cuts </h3>
        <ul class="list-items">
          <li class="list-item d-flex justify-content-between">
            <p class="list-item__name"> Dry cut</p>
            <span class="list-item__price">£1.50</span>
          </li>
          <li class="list-item d-flex justify-content-between">
            <p class="list-item__name"> Cut & Wash</p>
            <span class="list-item__price">£1.50</span>
          </li>
          <li class="list-item d-flex justify-content-between">
            <p class="list-item__name"> Wash & Restyle </p>
            <span class="list-item__price">£1.50</span>
          </li>
          <li class="list-item d-flex justify-content-between">
            <p class="list-item__name"> Clipper Cut</p>
            <span class="list-item__price">£1.50</span>
          </li>
          <li class="list-item d-flex justify-content-between">
            <p class="list-item__name"> Flat tops</p>
            <span class="list-item__price">£1.50</span>
          </li>
          <li class="list-item d-flex justify-content-between">
            <p class="list-item__name"> Skin Fade</p>
            <span class="list-item__price">£1.50</span>
          </li>
        </ul>
        <h3> Beards</h3>
        <ul class="list-items">
          <li class="list-item d-flex justify-content-between">
            <p class="list-item__name"> Beard/Moustache Trim</p>
            <span class="list-item__price">£1.50</span>
          </li>
          <li class="list-item d-flex justify-content-between">
            <p class="list-item__name"> Beard Trim (With Clippers) </p>
            <span class="list-item__price">£1.50</span>
          </li>
          <li class="list-item d-flex justify-content-between">
            <p class="list-item__name"> Express Shave</p>
            <span class="list-item__price">£1.50</span>
          </li>
          <li class="list-item d-flex justify-content-between">
            <p class="list-item__name"> Face Masks</p>
            <span class="list-item__price">£1.50</span>
          </li>
          <li class="list-item d-flex justify-content-between">
            <p class="list-item__name"> Beard Moisturise (Wax or Oils)</p>
            <span class="list-item__price">£1.50</span>
          </li>
        </ul>
 </section>
 <section class="recommended-products">
    <h4> Reccomended </h4>
    <div class="row flex-wrap">
        <article class="product-item">
          <img src="https://www.justmylook.com/images/schwarzkopf-professional-silhouette-super-hold-hairspray-750ml-p4918-3719_medium.jpg">
        </article>
        <article class="product-item">
           <img src="https://m.media-amazon.com/images/I/51TygTLCVfL._AC_UL320_.jpg">
        </article>
   </div>
</section>
   </main>
 </div>
</div>
 </section>
  <?php
  }
    get_footer();
 ?>
