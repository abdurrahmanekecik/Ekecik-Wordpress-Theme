<?php get_header(); ?>
  


  

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2><?php the_field('banner_huge_heading','option');?></h2>
                    <p><?php the_field('banner_description','option');?></p>
                  </div>
                  <div class="col-lg-12">
                    <div class="white-button first-button scroll-to-section">
                      <a href="<?php the_field('banner_button_link','option');?>"><?php the_field('banner_button_text','option');?>
                     </a>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <?php $banner_image_two = get_field('banner_image_two','option');?>
                <img src="<?php echo $banner_image_two['url'];?>" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="section-heading">
            <h4><?php the_field('about_heading','option');?></h4>
            
            <p><?php the_field ('about_despriction', 'option'); ?></p>
          </div>
          <div class="row">
             


          

      
    
      <?php 
            $about_services = get_field('about_services','option');
            if( $about_services ) {
    foreach( $about_services as $about_service )  {
      $about_service_headings = $about_service['about_service_heading'];
      $about_service_desprictions = $about_service['about_service_despriction'];
      ?>
                
                
 <div class="col-lg-6">

              <div class="box-item">
                <h4><a href="#"><?php echo $about_service_headings; ?></a></h4>
                <p><?php echo $about_service_desprictions; ?></p>
              </div>
            </div>

            <?php } }?>



            <div class="col-lg-12">
              <p><?php the_field ('about_despriction_down', 'option'); ?></p>
              <div class="gradient-button">
                <a href="<?php the_field ('about_buton_link', 'option'); ?>"><?php the_field ('about_buton', 'option'); ?></a>
              </div>
            
            </div>
          </div>
        </div>


        <div class="col-lg-6">
          <div class="right-image"><?php $about_image = get_field('about_image','option');?>
            <img src="<?php echo $about_image['url'];?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>















  <div id="clients" class="the-clients">
    <div class="container">

      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4><?php the_field ('clients_heading', 'option'); ?></h4>
            <?php $clients_alt_image = get_field('clients_alt_image','option');?>
            <img src="<?php echo $clients_alt_image['url'];?>" alt="">
            <p><?php the_field ('clients_despriction', 'option'); ?></p>
          </div>
        </div>

           
        <div class="col-lg-12">  
          <div class="naccs"> 
            <div class="first-thumb active">    
            <div class="grid"> 
            <?php 
            $clients_tab = get_field('clients_tab','option');
            if( $clients_tab ) {
    foreach( $clients_tab as $client_tab )  {
      $client_names = $client_tab['client_name'];
      $client_jobs = $client_tab['client_job'];
      $client_opinion_texts = $client_tab['client_opinion_text'];
      $client_images = $client_tab['client_image'];
      $clients_background_images = $client_tab['clients_background_image'];
      $client_opinion_categorys = $client_tab['client_opinion_category'];
      $client_ratings = $client_tab['client_rating'];
      $client_rating_stars = $client_tab['client_rating_star'];
      ?>   
              <div class="row"> 
                <div class="col-lg-7 align-self-center">  
                  <div class="menu">                 
                    <div class="thumb">
                       <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4><?php echo $client_names; ?></h4> 
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category"><?php echo $client_opinion_categorys; ?></span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                            <?php echo $client_rating_stars; ?>
                              
                              <span class="rating"><?php echo $client_ratings; ?></span>
                          </div>
                        </div>
                      </div>               
                  </div>
                </div> 
                <div class="col-lg-5">
                  <ul class="nacc">
                    <li class="active">
                     
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                               <?php $clients_tab_background_image = get_field('clients_tab_background_image','option');?>

                              <div style=" background-image: url(<?php echo $clients_tab_background_image['url'];?>);" 
                                class="client-content">
                                
                                <img src="<?php echo $clients_background_images['sizes']['thumbnail'];?>" alt="">
                                <p>“<?php echo $client_opinion_texts; ?>”</p>
                              </div>
                              <div class="down-content">                         
                                <img src="<?php echo $client_images['sizes']['thumbnail'];?>" alt="">
                                <div class="right-content">
                                  <h4><?php echo $client_names; ?></h4>
                                  <span><?php echo $client_jobs; ?> </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>                                     
                  </ul> 
                </div>       
              </div><?php } }?> 
            </div>
          </div>
        </div>  
      </div> 
     

    </div>
  </div>
</div>











  <div id="pricing" class="pricing-tables">
    <div class="container">
      <div class="row">






        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4><?php the_field ('price_heading', 'option'); ?></h4>
            <?php $price_image = get_field('price_image','option');?>
            <img src="<?php echo $price_image['url'];?>" alt="">
            <p><?php the_field ('price_despriction', 'option'); ?></p>
          </div>
        </div>

  <?php 

    
         








          



            $price_plan = get_field('price_plan','option');
            if( $price_plan ) {
    foreach( $price_plan as $price_plans )  {
      $plan_prices = $price_plans['plan_price'];
      $plan_names = $price_plans['plan_name'];
      $plan_images = $price_plans['plan_image'];
      $plan_contents = $price_plans['plan_content'];

      $plan_button_texts = $price_plans['plan_button_text'];

      $plan_button_links = $price_plans['plan_button_link'];


?>


        <div class="col-lg-4">
          <div class="pricing-item-regular">
            <span class="price"><?php echo $plan_prices; ?></span>
            <h4><?php echo $plan_names; ?></h4>
            <div class="icon">
              <img src="<?php echo $plan_images['sizes']['thumbnail'];?>" alt="">
            </div>
            <ul>

             <?php echo $plan_contents; ?>



            </ul>
            <div class="border-button">
              <a href="<?php echo $plan_button_links; ?>"><?php echo $plan_button_texts; ?></a>
            </div>
          </div>
        </div>





<?php }} ?>









   
      
      </div>
    </div>
  </div> 

  

<?php get_footer(); ?>