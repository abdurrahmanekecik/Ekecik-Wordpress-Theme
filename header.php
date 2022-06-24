<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php $favicon = get_field('favicon','option');?>
<link rel="shortcut icon" href="<?php echo $favicon['url']; ?>" type="image/x-icon"/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<?php include('style.php');?>
</head>
<body>
  


  <!-- ***** Header Area Start ***** 
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>

-->

    
    
<!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">

          <!-- ***** Logo Start ***** -->
          <a href=" <?php echo home_url(); ?>" class="logo">
            <?php $logo_settings = get_field('logo_settings','option');?>
           
            <img src="<?php echo $logo_settings['url'];?>" >
          </a>
          <!-- ***** Logo End ***** -->
          
          <!-- ***** Menu Start ***** -->
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav', 'menu_id' => 'main-menu') ); ?>  
          <a class='menu-trigger'>
            <span>Menu</span>
          </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
