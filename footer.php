
    

<footer id="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>  <?php $footer_one_heading = the_field('footer_one_heading','option');?></h4>
          </div>
        </div>
       
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4><?php $footer_one_section_heading = the_field('footer_one_section_heading','option');?></h4>
            <p><?php $location = the_field('location','option');?></p>
            <p><a href="tel:<?php $phone_number = the_field('phone_number','option');?>"><?php $phone_number = the_field('phone_number','option');?></a></p>
            <p><a href="<?php $e_mail = the_field('e_mail','option');?>"><?php $e_mail = the_field('e_mail','option');?></a></p>
          </div>
        </div>











        <div class="col-lg-3">
          <div class="footer-widget">
            <h4><?php $footer_two_section_heading = the_field('footer_two_section_heading','option');?></h4>
            <ul>
         
          <?php wp_nav_menu( array( 'theme_location' => 'footer1', 'menu_class' => 'nav', 'menu_id' => 'footer1') ); ?>  
          </div>
        </div>




        <div class="col-lg-3">
          <div class="footer-widget">
            <h4><?php $footer_three_section_heading = the_field('footer_three_section_heading','option');?></h4>
            <ul>
              
          <?php wp_nav_menu( array( 'theme_location' => 'footer2', 'menu_class' => 'nav', 'menu_id' => 'footer2') ); ?> 
            </ul>
          </div>
        </div>



        <div class="col-lg-3">
          <div class="footer-widget">
            <h4><?php $footer_four_section_heading = the_field('footer_four_section_heading','option');?></h4>
            <div class="logo">


              <?php $logo_settings = get_field('logo_settings','option');?>
              


              <img src="<?php echo $logo_settings['url'];?>" alt="">


            </div>
            <p><?php $about_despriction = the_field('about_despriction','option');?></p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright-text">
            <p><?php $about_despriction = the_field('about_despriction','option');?>
          <br>Design: <a href="<?php $copyright_link = the_field('copyright_link','option');?>" target="_blank" title="css templates">
            <?php $design_name = the_field('design_name','option');?></a></p>
          </div>
        </div>
      </div>
    </div>


  </footer>
<?php wp_footer(); ?>

</body>
</html>