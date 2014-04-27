<!DOCTYPE html>
<html lang="en">
  
  <?php  include"includes/head.php"; ?>

  <body class="no-js">
  <?php include_once("analyticstracking.php") ?>
  <div id="overlay" class="visible-xs"></div>
  
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  
	<div id="main" class="container">
    
      <?php include"includes/header.php"; ?>
    
      <div id="header">
        <ul class="rslides" id="slider">
          <?php include"includes/slide_banner.txt"; ?>
        </ul>
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
        
        <!--S:CAMPUR-CAMPUR-->
        <div class="pview red">
        <div class="col-xs-6 col-sm-3 col-sm-pull-6 box light_grey2">
          <div class="box_content">
            <img class="box_mask lazy" src="images/mask.png" width="250" height="158">
            <?php include"program/campur_campur/jadwal.txt"; ?>
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 col-sm-pull-6 box">
          <div class="box_content">
            <?php include"program/campur_campur/banner_deskripsi.txt"; ?>
          </div>
        </div>
        </div>
        <!--E:CAMPUR-CAMPUR-->
        
        <!--S:SUPER DEAL-->
        <div class="col-xs-12 col-sm-6 box">
          <div class="box_content row pview red">
          
            <div class="col-xs-6 col-sm-6 box white gantung">
              <div class="box_content">
                <img class="box_mask lazy" src="images/mask2.png" width="250" height="158">
            	<?php include"program/super_deal/jadwal.txt"; ?>
              </div>
            </div>
            
            <?php include"program/super_deal/banner_deskripsi.txt"; ?>
            
          </div>
        </div>
        <!--E:SUPER DEAL-->
        
        <!--S:CATATAN SI OLGA-->
        <div class="pview red">
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content">
          <?php include"program/catatan_si_olga/banner_deskripsi.txt"; ?>
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 box light_grey2">
          <div class="box_content">
            <img class="box_mask lazy" src="images/mask.png" width="250" height="158">
            <?php include"program/catatan_si_olga/jadwal.txt"; ?>
          </div>
        </div>
        </div>
        <!--E:CATATAN SI OLGA-->
        
        <!--S:MATA LENSA-->
        <div class="pview blue">
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content">
          <?php include"program/mata_lensa/banner_deskripsi.txt"; ?>
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 box white">
          <div class="box_content">
            <img class="box_mask lazy" src="images/mask2.png" width="250" height="158">
            <?php include"program/mata_lensa/jadwal.txt"; ?>
          </div>
        </div>
        </div>
        <!--E:MATA LENSA-->
        
        <!--S:FANTASTIC WORLDCUP-->
        <div class="pview blue">        
        <div class="col-xs-6 col-sm-3 box light_grey2">
          <div class="box_content">
            <img class="box_mask lazy" src="images/mask.png" width="250" height="158">
            <?php include"program/fantastic_worldcup/jadwal.txt"; ?>
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content">
            <?php include"program/fantastic_worldcup/banner_deskripsi.txt"; ?>
          </div>
        </div>
        </div>
        <!--E:FANTASTIC WORLDCUP-->
        
        <!--S:PESBUKERS-->
        <div class="col-xs-12 col-sm-6 box pull-right">
          <div class="box_content row pview red">
          
            <div class="col-xs-6 col-sm-6 box light_grey2 gantung right">
              <div class="box_content">
                <img class="box_mask lazy" src="images/mask.png" width="250" height="158">
                <?php include"program/pesbukers/jadwal.txt"; ?>
              </div>
            </div>
            
            <?php include"program/pesbukers/banner_deskripsi.txt"; ?>
            
          </div>
        </div>
        <!--E:PESBUKERS-->
        
        <!--S:MASHA-->
        <div class="pview yellow">
        <div class="col-xs-6 col-sm-3 box white">
          <div class="box_content">
            <img class="box_mask lazy" src="images/mask2.png" width="250" height="158">
            <?php include"program/masha/jadwal.txt"; ?>
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content">
          <?php include"program/masha/banner_deskripsi.txt"; ?>
          </div>
        </div>
        </div>
        <!--E:MASHA-->
        
      </div>
      <!--END: #row_1-->
      
      <div id="row_2" class="row white">
      
        <div class="col-xs-12 col-sm-4 fixed_height">
          <div class="box_title"><span class="icon icon-youtube"></span> whatsonANTV</div>
          <iframe width="100%" height="82%" frameborder="0" allowfullscreen="" src="<?php include"includes/youtube_whatson_antv.txt"; ?>">
          </iframe>
        </div>
        
        <div class="col-xs-12 col-sm-4 fixed_height">
          <div class="box_title"><span class="icon icon-facebook"></span> ANTVLOVERS</div>
          <?php include"includes/antvlovers.txt"; ?>
        </div>
        
        <div class="col-xs-12 col-sm-4 fixed_height">
          <div class="box_title"><span class="icon icon-twitter2"></span> @whatsonANTV</div>
          <?php include"includes/twitter_whatson_antv.txt"; ?>
        </div>
        
        <div class="col-xs-12 col-sm-4">
          <div class="box_title"><span class="icon icon-pen"></span> Jadwal Hari Ini</div>
            <iframe width="100%" height="100%" class="scroll" frameborder="0" allowfullscreen="" src="includes/inc_jadwal.php"></iframe>
             <!--<div class="scroll">
              <table id="jadwal" width="100%" border="0" cellspacing="1" cellpadding="2">
              <tr>
                <td class="pull-right">00:30</td>
                <td>Topik Malam</td>
              </tr>
              <tr>
                <td class="pull-right">01:00</td>
                <td>Fenomena</td>
              </tr>
              <tr>
                <td class="pull-right">01:30</td>
                <td>11th Circo Massimo</td>
              </tr>
              <tr>
                <td class="pull-right">02:00</td>
                <td>Wooow</td>
              </tr>
              <tr>
                <td class="pull-right">03:00</td>
                <td>Tawa Sutra XL</td>
              </tr>
              <tr>
                <td class="pull-right">04:00</td>
                <td>Pelita Hati</td>
              </tr>
              <tr>
                <td class="pull-right">04:30</td>
                <td>Topik Pagi</td>
              </tr>
              <tr>
                <td class="pull-right">05:30</td>
                <td>Lensa Olahraga</td>
              </tr>
              <tr>
                <td class="pull-right">06:30</td>
                <td>Ripleys believe It Or Not</td>
              </tr>
              <tr>
                <td class="pull-right">07:30</td>
                <td>Lensa Olahraga</td>
              </tr>
              <tr>
                <td class="pull-right">00:30</td>
                <td>Topik Malam</td>
              </tr>
              <tr>
                <td class="pull-right">01:00</td>
                <td>Fenomena</td>
              </tr>
              <tr>
                <td class="pull-right">01:30</td>
                <td>11th Circo Massimo</td>
              </tr>
              <tr>
                <td class="pull-right">02:00</td>
                <td>Wooow</td>
              </tr>
              <tr>
                <td class="pull-right">00:30</td>
                <td>Topik Malam</td>
              </tr>
              <tr>
                <td class="pull-right">01:00</td>
                <td>Fenomena</td>
              </tr>
              <tr>
                <td class="pull-right">01:30</td>
                <td>11th Circo Massimo</td>
              </tr>
              <tr>
                <td class="pull-right">02:00</td>
                <td>Wooow</td>
              </tr>
              <tr>
                <td class="pull-right">03:00</td>
                <td>Tawa Sutra XL</td>
              </tr>
              <tr>
                <td class="pull-right">04:00</td>
                <td>Pelita Hati</td>
              </tr>
              <tr>
                <td class="pull-right">04:30</td>
                <td>Topik Pagi</td>
              </tr>
            </table>
          </div> -->
        </div>
        
        <div class="clearfix visible-xs"></div>
        <div class="col-sm-8 white">
          <img class="cover lazy" src="head_banner/banner_bot1.jpg" width="667" height="250">
          <img class="cover lazy" src="head_banner/banner_bot2.jpg" width="667" height="250">
        </div>
      
      </div>
      <!--END: #row_2-->
            
      <?php include"includes/footer.php" ?>
      
      </div><!-- /.container -->

      <?php include"includes/js.php"; ?>
    
  </body>
</html>