<?php 

$banner_image = get_field('banner_image','option');

$footer_background = get_field('footer_background','option');


?>
<style>


footer {
  background-image: url( <?php echo $footer_background['url'];?>);
  background-position: center top;
  background-repeat: no-repeat;
  background-size: cover;
  margin-top: 130px;
  padding-top: 300px;
  padding-bottom: 60px;
}



	.main-banner:after {
  background-image: url(<?php echo $banner_image['url'];?>);
  content: '';
  background-repeat: no-repeat;
  background-size: contain;
  position: absolute;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 1;
}
 

.service-item:hover {
  background-position: right top;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>
<?php
?>