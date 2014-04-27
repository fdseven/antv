<!DOCTYPE html>
<html lang="en">
  
  <?php  include"includes/head.php"; ?>

  <body class="no-js">
  <div id="overlay" class="visible-xs"></div>
  
	<div id="main" class="container">
    
      <?php include"includes/header.php"; ?>
    
      <div id="header">
        <img class="cover" src="head_banner/banner_female.jpg" width="1000" height="150">
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
        
        <div class="pview violet">
        <div class="col-xs-6 col-sm-3 col-sm-pull-6 box white">
          <div class="box_content">
            <img class="box_mask lazy" src="images/mask2.png" width="250" height="158">
            <!--<h4 class="jdl_program">TOTAL<br>FOOTBAL</h4>
            <p class="hari">SABTU - MINGGU</p>
            <h1 class="jam">12<br>.30 <p>WIB</p></h1>-->
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 col-sm-pull-6 box">
          <div class="box_content">
          <img class="cover lazy" src="images/antv.jpg" width="250" height="250">
            
          </div>
        </div>
        </div>
        
        <!--S:TRAVELLEZZA-->
        <div class="pview violet">              
        <div class="col-xs-6 col-sm-3 box light_grey2">
          <div class="box_content">
            <img class="box_mask" src="images/mask.png" width="250" height="158">
            <?php include"program/travellezza/jadwal.txt"; ?>
          </div>
        </div>
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content">
            <?php include"program/travellezza/banner_deskripsi.txt"; ?>
          </div>
        </div> 
        </div>
        <!--E:TRAVELLEZZA-->
        
        <!--S:SOS-->
        <div class="col-xs-12 col-sm-6 box pull-right">
          <div class="box_content row pview violet">
          
            <div class="col-xs-6 col-sm-6 box white gantung right">
              <div class="box_content">
                <img class="box_mask lazy" src="images/mask2.png" width="250" height="158">
                <?php include"program/sos/jadwal.txt"; ?>
              </div>
            </div>
            
            <?php include"program/sos/banner_deskripsi.txt"; ?>
            
          </div>
        </div>
        <!--E:SOS-->
        
        <!--S:MAHABHARATA-->
        <div class="col-xs-12 col-sm-6 box">
          <div class="box_content row pview violet">
          
            <div class="col-xs-6 col-sm-6 box white gantung">
              <div class="box_content">
                <img class="box_mask lazy" src="images/mask2.png" width="250" height="158">
                <?php include"program/mahabharata/jadwal.txt"; ?>
              </div>
            </div>
            
            <?php include"program/mahabharata/banner_deskripsi.txt"; ?>
            
          </div>
        </div>
        <!--E:MAHABHARATA-->
        
        <!--S:TOPIK PAGI-->
        <div class="pview violet">
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content">
            <?php include"program/topik_pagi/banner_deskripsi.txt"; ?>
          </div>
        </div>
        <div class="col-xs-6 col-sm-3 box light_grey2">
          <div class="box_content">
            <img class="box_mask lazy" src="images/mask.png" width="250" height="158">
            <?php include"program/topik_pagi/jadwal.txt"; ?>
          </div>
        </div>        
        </div>
        <!--E:TOPIK PAGI-->
        
        <div class="pview violet">        
        <div class="col-xs-6 col-sm-3 box white">
          <div class="box_content">
            <!--<img class="box_mask lazy" src="images/mask2.png" width="250" height="158">
            <h4 class="jdl_program tiga">FANTASTIC<br>WORLD CUP<br>BEST MATCH</h4>
            <p class="hari">JUMAT</p>
            <h1 class="jam">24<br>.00 <p>WIB</p></h1>-->
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content">
          <img class="cover lazy" src="images/antv.jpg" width="250" height="250">
            
          </div>
        </div>
        </div>
        
        <div class="pview violet">
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content">
          <img class="cover lazy" src="images/antv.jpg" width="250" height="250">
            
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 box white">
          <div class="box_content">
            <!--<img class="box_mask lazy" src="images/mask.png" width="250" height="158">
            <h4 class="jdl_program">KAMPIUN</h4>
            <p class="hari">SABTU - MINGGU</p>
            <h1 class="jam">12<br>.00 <p>WIB</p></h1>-->
          </div>
        </div>
        </div>
      
      </div>
      <!--END: #row_1-->
      
      <?php include"includes/footer.php" ?>
      
      </div><!-- /.container -->

      <?php include"includes/js.php"; ?>
    
  </body>
</html>