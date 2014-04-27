<!DOCTYPE html>
<html lang="en">
  
  <?php  include"includes/head.php"; ?>

  <body class="no-js">
  <div id="overlay" class="visible-xs"></div>
  
	<div id="main" class="container">
    
      <?php include"includes/header.php"; ?>
    
      <div id="header">
        <img class="cover" src="head_banner/banner_family.jpg" width="1000" height="150">
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
        
        <!--S:CAHAYA HATI-->
        <div class="pview red">
        <div class="col-xs-6 col-sm-3 col-sm-pull-6 box light_grey2">
          <div class="box_content">
            <img class="box_mask lazy" src="images/mask.png" width="250" height="158">
            <?php include "program/cahaya_hati/jadwal.txt"; ?>
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 col-sm-pull-6 box">
          <div class="box_content">
            <?php include "program/cahaya_hati/banner_deskripsi.txt"; ?>
          </div>
        </div>
        </div>
        <!--E:CAHAYA HATI-->
        
        <!--S:CAMPUR-CAMPUR-->
        <div class="pview red">
        <div class="col-xs-6 col-sm-3 box white">
          <div class="box_content">
            <img class="box_mask lazy" src="images/mask2.png" width="250" height="158">
            <?php include "program/campur_campur/jadwal.txt"; ?>
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content">
            <?php include "program/campur_campur/banner_deskripsi.txt"; ?>
          </div>
        </div>
        </div>
        <!--E:CAMPUR-CAMPUR-->
        
        <!--S:PESBUKERS-->
        <div class="col-xs-12 col-sm-6 box pull-right">
          <div class="box_content row pview red">
          
            <div class="col-xs-6 col-sm-6 box light_grey2 gantung right">
              <div class="box_content">
                <img class="box_mask lazy" src="images/mask.png" width="250" height="158">
                <?php include "program/pesbukers/jadwal.txt"; ?>
              </div>
            </div>
            
            <?php include "program/pesbukers/banner_deskripsi2.txt"; ?>
            
          </div>
        </div>
        <!--E:CAHAYA HATI-->
        
        <!--S:JEJAK PARANORMAL-->
        <div class="pview red">        
        <div class="col-xs-6 col-sm-3 box light_grey2">
          <div class="box_content">
            <img class="box_mask" src="images/mask.png" width="250" height="158">
            <?php include "program/jejak_paranormal/jadwal.txt"; ?>
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content">
            <?php include "program/jejak_paranormal/banner_deskripsi.txt"; ?>
          </div>
        </div>
        </div>
        <!--E:JEJAK PARANORMAL-->
        
        <!--S:SUPER DEAL-->
        <div class="col-xs-12 col-sm-6 box">
          <div class="box_content row pview red">
          
            <div class="col-xs-6 col-sm-6 box white gantung">
              <div class="box_content">
                <img class="box_mask lazy" src="images/mask2.png" width="250" height="158">
            	<?php include "program/super_deal/jadwal.txt"; ?>
              </div>
            </div>
            
            <?php include "program/super_deal/banner_deskripsi.txt"; ?>
            
          </div>
        </div>
        <!--E:SUPER DEAL-->
        
        <!--S:CATATAN SI OLGA-->
        <div class="pview red">
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content">
            <?php include "program/catatan_si_olga/banner_deskripsi.txt"; ?>
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 box white">
          <div class="box_content">
            <img class="box_mask lazy" src="images/mask2.png" width="250" height="158">
            <?php include "program/catatan_si_olga/jadwal.txt"; ?>
          </div>
        </div>
        </div>
        <!--E:CATATAN SI OLGA-->
        
        <!--S:SINEMA SPESIAL-->
        <div class="pview red">        
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content">
            <?php include "program/sinema_spesial/banner_deskripsi.txt"; ?>
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 box light_grey2">
          <div class="box_content">
            <img class="box_mask" src="images/mask.png" width="250" height="158">
            <?php include "program/sinema_spesial/jadwal.txt"; ?>
          </div>
        </div>
        </div>
        <!--E:SINEMA SPESIAL-->
      
      </div>
      <!--END: #row_1-->
      
      <?php include"includes/footer.php" ?>
      
      </div><!-- /.container -->

      <?php include"includes/js.php"; ?>
    
  </body>
</html>