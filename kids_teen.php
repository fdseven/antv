<!DOCTYPE html>
<html lang="en">
  
  <?php  include"includes/head.php"; ?>

  <body class="no-js">
  <div id="overlay" class="visible-xs"></div>
  
	<div id="main" class="container">
    
      <?php include"includes/header.php"; ?>
    
      <div id="header">
        <img class="cover" src="head_banner/banner_kids_teen.jpg" width="1000" height="150">
      </div>
      
      <div id="row_1" class="row">
        
        <!--Pengecualian box share karena di tengah-->
        <div id="share" class="col-xs-12 col-sm-3 box top">
          <div class="box_content">
            <?php include "includes/social_media_links.php"; ?>
          </div>
        </div>
      
        <!--S:MASHA-->
        <div class="col-xs-12 col-sm-6 box">
          <div class="box_content row pview yellow">
          
            <div class="col-xs-6 col-sm-6 box light_grey2 gantung">
              <div class="box_content">
                <img class="box_mask" src="images/mask.png" width="250" height="158">
            	<?php include"program/masha/jadwal.txt"; ?>
              </div>
            </div>
            
            <?php include"program/masha/banner_deskripsi2.txt"; ?>

          </div>
        </div>
        <!--E:MASHA-->
      
        <div id="share" class="col-xs-12 col-sm-3 box middle">
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
        
        <!--S:ODDBODS-->
        <div class="pview yellow">        
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content">
            <?php include"program/oddbods/banner_deskripsi.txt"; ?>
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 box white">
          <div class="box_content">
            <img class="box_mask" src="images/mask2.png" width="250" height="158">
            <?php include"program/oddbods/jadwal.txt"; ?>
          </div>
        </div>
        </div>
        <!--E:ODDBODS-->
        
        <!--S:TOM & JERRY-->
        <div class="pview yellow">        
        <div class="col-xs-6 col-sm-3 box white">
          <div class="box_content">
            <img class="box_mask" src="images/mask2.png" width="250" height="158">
            <?php include"program/tom_jerry/jadwal.txt"; ?>
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content">
          <?php include"program/tom_jerry/banner_deskripsi.txt"; ?>
          </div>
        </div>
        </div>
        <!--E:TOM & JERRY-->
        
        <!--S:ANGRY BIRDS-->
        <div class="pview yellow">
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content">
          <?php include"program/angry_birds/banner_deskripsi.txt"; ?>
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 box light_grey2">
          <div class="box_content">
            <img class="box_mask" src="images/mask.png" width="250" height="158">
            <?php include"program/angry_birds/jadwal.txt"; ?>
          </div>
        </div>
        </div>
        <!--E:ANGRY BIRDS-->
        
        <!--S:BIMA SAKTI-->
        <div class="pview yellow">        
        <div class="col-xs-6 col-sm-3 box light_grey2">
          <div class="box_content">
            <img class="box_mask" src="images/mask.png" width="250" height="158">
            <?php include"program/bima_sakti/jadwal.txt"; ?>
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content">
            <?php include"program/bima_sakti/banner_deskripsi.txt"; ?>
          </div>
        </div>
        </div>
        <!--E:BIMA SAKTI-->
        
        <!--S:BERNARD BEAR-->
        <div class="col-xs-12 col-sm-6 box pull-right">
          <div class="box_content row pview yellow">
          
            <div class="col-xs-6 col-sm-6 box white gantung right">
              <div class="box_content">
                <img class="box_mask" src="images/mask2.png" width="250" height="158">
                <?php include"program/bernard_bear/jadwal.txt"; ?>
              </div>
            </div>
            
            <?php include"program/bernard_bear/banner_deskripsi.txt"; ?>
            
          </div>
        </div>
        <!--E:BERNARD BEAR-->
        
        <!--S:CURIOUS GEORGE-->
        <div class="pview yellow">
        <div class="col-xs-6 col-sm-3 box white">
          <div class="box_content">
            <img class="box_mask" src="images/mask2.png" width="250" height="158">
            <?php include"program/curious_george/jadwal.txt"; ?>
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content">
            <?php include"program/curious_george/banner_deskripsi.txt"; ?>
          </div>
        </div>
        </div>
        <!--E:CURIOUS GEORGE-->
      
      </div>
      <!--END: #row_1-->
      
      <?php include"includes/footer.php" ?>
      
      </div><!-- /.container -->

      <?php include"includes/js.php"; ?>
    
  </body>
</html>