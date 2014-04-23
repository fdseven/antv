<!DOCTYPE html>
<html lang="en">
  
  <?php  include"includes/head.php"; ?>

  <body class="no-js">
  <div id="overlay" class="visible-xs"></div>
  
	<div id="main" class="container">
    
      <?php include"includes/header.php"; ?>
    
      <div id="header">
        <img class="cover" src="images/banner_corporate.jpg" alt="" width="1000" height="400">
      </div>
      
      <div id="hubungi" class="row">
      
        <!--Pengecualian box share karena di tengah-->
        <div id="share" class="col-xs-12 col-sm-12 top2">
          <div>
            <?php include "includes/social_media_links.php"; ?>
          </div>
        </div>
        
        <div class="col-xs-12 col-sm-3 box light_grey2">
          <div class="box_content">
            <img class="box_mask lazy" src="images/mask.png" width="250" height="158">
        	<h3 class="head_title">HUBUNGI</h3>
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 col-xs-push-3 col-sm-push-0 box">
          <div class="box_content">
          <img class="cover lazy" src="images/hubungi.jpg" width="250" height="250">
          </div>
        </div>
      
        <div id="share" class="col-xs-12 col-sm-3 box hidden-xs">
          <div class="box_content">
            <?php include "includes/social_media_links.php"; ?>
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 hidden-xs box">
          <div class="box_content black">
            <ul id="kanal_menu">
              <?php include"includes/kanal_menu.txt"; ?>
            </ul>
          </div>
        </div>
        
        <div class="col-xs-12 col-sm-3 box">
          <div class="box_content light_grey">
            <?php include"includes/kontak_corporate_communication.txt"; ?>
          </div>
        </div>
        
        <div class="col-xs-12 col-sm-3 box">
          <div class="box_content light_grey2">
            <?php include"includes/kontak_sales_marketing.txt"; ?>
          </div>
        </div>
        
        <div class="col-xs-12 col-sm-3 box">
          <div class="box_content light_grey">
            <?php include"includes/kontak_news_current_affair.txt"; ?>
          </div>
        </div>
        
        <div class="col-xs-12 col-sm-3 box">
          <div class="box_content light_grey2">
            <?php include"includes/kontak_production.txt"; ?>
          </div>
        </div>
      
      </div>
      <!--END: #hubungi-->
      
      <?php include"includes/footer.php" ?>
      
      </div><!-- /.container -->

      <?php include"includes/js.php"; ?>
    
  </body>
</html>