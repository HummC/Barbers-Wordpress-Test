<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
        <meta charset="<?php bloginfo( 'charset' );?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <?php wp_head(); ?>
  </head>
<body <?php body_class();?>>
  <!-- Site Header -->
  <header class="site-header">
    <div class="container">
      <nav class="header-navigation navbar navbar-expand-lg navbar-light p-3">
        <a class="navbar-brand" href="<?php echo site_url()?>">Bootstrap Barbers </a>
        <button class="navbar-toggler border-0 no-outline" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars header-navigation__button"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link <?php if(is_front_page()) {echo "current-page";}?>" href="<?php echo site_url()?>">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link <?php if(is_page('the-barbers')) {echo "current-page";}?>" href="<?php echo site_url('/the-barbers')?>">The Barbers</a>
            <a class="nav-item nav-link <?php if(is_page('gallery')) {echo "current-page";}?>" href="<?php echo site_url('/gallery')?>">Gallery</a>
            <a class="nav-item nav-link <?php if(is_page('prices')) {echo "current-page";}?>" href="<?php echo site_url('/prices')?>">Prices</a>
            <a class="btn btn-primary ml-lg-3" href="#">01245 622541</a>
          </div>
        </div>
      </nav>
    </div>
    <div class="container-fluid">
    <div class="row">
      <div class="alert-light col-12 d-flex align-items-center justify-content-center p-2">
        <span>NO APPOINTMENT NECESSARY</span>
    </div>
    </div>
  </div>
  </header>
