<!DOCTYPE html>
<html lang="en">
  
  <?php  include"includes/head.php"; ?>

  <body class="no-js">
  <div id="overlay" class="visible-xs"></div>
  
	<div id="main" class="container">
    
      <?php include"includes/header.php"; ?>
    
      <div id="header">
        <img class="cover" src="head_banner/banner_male.jpg" width="1000" height="150">
      </div>
      
      <div id="row_1" class="row">
      
        <div id="share" class="col-xs-12 col-sm-3 col-sm-push-6 box">
          <div class="box_content">
            <?php include "includes/social_media_links.php"; ?>
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 col-sm-push-6 hidden-xs box">
          <div class="box_content black">
            <ul id="kanal_menu">
              <?php include"includes/kanal_menu.txt"; ?>
            </ul>
          </div>
        </div>
        
        <!--S:TOTAL FOOTBALL-->
        <div class="pview blue">
        <div class="col-xs-6 col-sm-3 col-sm-pull-6 box light_grey2">
          <div class="box_content">
            <img class="box_mask lazy" src="images/mask.png" width="250" height="158">
            <?php include"program/total_football/jadwal.txt"; ?>
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 col-sm-pull-6 box">
          <div class="box_content">
            <?php include"program/total_football/banner_deskripsi.txt"; ?>
          </div>
        </div>
        </div>
        <!--E:TOTAL FOOTBALL-->
        
        <!--S:FIFA WORLDCUP-->
        <div class="col-xs-12 col-sm-6 box">
          <div class="box_content row pview blue">
          
            <div class="col-xs-6 col-sm-6 box white gantung">
              <div class="box_content">
                <img class="box_mask lazy" src="images/mask2.png" width="250" height="158">
                <?php include"program/fifa_worldcup/jadwal.txt"; ?>
              </div>
            </div>
            
            <?php include"program/fifa_worldcup/banner_deskripsi.txt"; ?>
            
          </div>
        </div>
        <!--E:FIFA WORLDCUP-->
        
        <!--S:ANGKER BANGET-->
        <div class="pview blue"> 
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content">
            <?php include"program/angker_banget/banner_deskripsi.txt"; ?>            
          </div>
        </div>      
        
        <div class="col-xs-6 col-sm-3 box light_grey2">
          <div class="box_content">
            <img class="box_mask" src="images/mask.png" width="250" height="158">
            <?php include"program/angker_banget/jadwal.txt"; ?>            
          </div>
        </div>
        </div>
        <!--E:ANGKER BANGET-->
        
        <!--S:LENSA OLAHRAGA-->
        <div class="col-xs-12 col-sm-6 box pull-right">
          <div class="box_content row pview blue">
          
            <div class="col-xs-6 col-sm-6 box white gantung right">
              <div class="box_content">
                <img class="box_mask lazy" src="images/mask2.png" width="250" height="158">
            	<?php include"program/lensa_olahraga/jadwal.txt"; ?>            
              </div>
            </div>
            
            <?php include"program/lensa_olahraga/banner_deskripsi.txt"; ?>            
            
          </div>
        </div>
        <!--E:LENSA OLAHRAGA-->
        
        <!--S:MATA LENSA-->
        <div class="pview blue">
        <div class="col-xs-6 col-sm-3 box light_grey2">
          <div class="box_content">
            <img class="box_mask lazy" src="images/mask.png" width="250" height="158">
            <?php include"program/mata_lensa/jadwal.txt"; ?>            
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content">
            <?php include"program/mata_lensa/banner_deskripsi.txt"; ?>            
          </div>
        </div>        
        </div>
        <!--E:MATA LENSA-->
        
        <!--S:FANTASTIC WORLDCUP-->
        <div class="pview blue">        
        <div class="col-xs-6 col-sm-3 box white">
          <div class="box_content">
            <img class="box_mask lazy" src="images/mask2.png" width="250" height="158">
            <?php include"program/fantastic_worldcup/jadwal_bestmatch.txt"; ?>            
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content">
            <?php include"program/fantastic_worldcup/banner_deskripsi.txt"; ?>            
          </div>
        </div>
        </div>
        <!--E:FANTASTIC WORLDCUP-->
        
        <!--S:KAMPIUN-->
        <div class="pview blue">
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content">
            <?php include"program/kampiun/banner_deskripsi.txt"; ?>                        
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 box light_grey2">
          <div class="box_content">
            <img class="box_mask lazy" src="images/mask.png" width="250" height="158">
            <?php include"program/kampiun/jadwal.txt"; ?>                        
          </div>
        </div>
        </div>
        <!--S:KAMPIUN-->
      
      </div>
      <!--END: #row_1-->
      
      <?php include"includes/footer.php" ?>
      
      </div><!-- /.container -->

      <?php include"includes/js.php"; ?>
    
  </body>
</html>