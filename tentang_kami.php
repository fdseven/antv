<!DOCTYPE html>
<html lang="en">
  <?php $page = "about"; ?>
  <?php include"includes/head.php"; ?>

  <body class="no-js" onload="setTimeout(function() { window.scrollTo(0, 1) }, 100);">
  <div id="overlay" class="visible-xs"></div>
  
	<div id="main" class="container">
    
      <?php include"includes/header.php"; ?>
    
      <div id="header">
        <img class="cover" src="head_banner/banner_corporate.jpg" alt="" width="1000" height="400">
      </div>
      
      <div id="about" class="row sTop">
      
        <!--Pengecualian box share karena di tengah-->
        <div id="share" class="col-xs-12 col-sm-12 top2">
          <div>
            <a href="#" class="icon icon-facebook"></a>
            <a href="#" class="icon icon-twitter"></a>
            <a href="#" class="icon icon-youtube"></a>
            <a href="#" class="icon icon-gplus"></a>
          </div>
        </div>
      
        <div id="share" class="col-xs-12 col-sm-3 col-sm-push-6 box hidden-xs">
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
        
        <div class="col-xs-12 col-sm-3 col-sm-pull-6 box light_grey2">
          <div class="box_content">
            <img class="box_mask lazy" src="images/mask.png" width="250" height="158">
        	<h3 class="head_title">TENTANG<br class="hidden-xs"> <span>KAMI</span></h3>
          </div>
        </div>
        
        <div class="col-xs-12 col-sm-3 col-sm-pull-6 box box3">
          <div class="box_content grey">
            
            <h5 class="head_title"><span>PROFIL</span> <br class="hidden-xs">PERUSAHAAN</h5>
            <article>
              <?php include"includes/profil_perusahaan.txt"; ?>
              <p class="visible-xs">&nbsp;</p>
            </article>
    
          </div>
        </div>
        
        <div class="col-xs-12 col-sm-3 box pulltop">
          <div class="box_content grey grey2">
            <h5 class="head_title">VISI</h5>
            <article>
            <?php include"includes/visi.txt"; ?>
            <p class="visible-xs">&nbsp;</p>
            </article>
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 col-xs-push-3 col-sm-push-0 box pulltop2">
          <div class="box_content">
            <img class="cover" src="images/visi.jpg" width="250" height="250">
          </div>
        </div>
        
        <div class="col-xs-12 col-sm-3 box">
          <div class="box_content grey">
            <h5 class="head_title">MISI</h5>
            <article>
			<?php include"includes/misi.txt"; ?>
            <p class="visible-xs">&nbsp;</p>
            </article>
          </div>
        </div>
        
        <div class="col-xs-12 col-sm-6 box land">
          <div class="box_content grey">
            <img class="cover" src="images/esc_land.jpg" width="500" height="250">
          </div>
        </div>
        
        <div class="col-xs-12 col-sm-3 col-sm-pull-3 pulltop box box2">
        <div class="box_content grey grey2">
          <h5 class="head_title"><span>KEBIJAKAN</span> <br class="hidden-xs">MUTU</h5>
          <article>
            <?php include"includes/kebijakan_mutu.txt"; ?>
            <p class="visible-xs">&nbsp;</p>
          </article>
        </div>
        </div>
        
        <div class="col-xs-12 col-sm-3 box pulltop">
      
          <div class="box_content black">
            <ul id="profile_menu">
              <li><a id="sTop" href="#">TENTANG KAMI</a></li>
              <li><a id="s1" href="#">DEWAN KOMISARIS</a></li>
              <li><a id="s2" href="#">DEWAN DIREKSI</a></li>
              <li><a id="s3" href="#">SENIOR MANAGEMENT TEAM</a></li>
              <li><a id="s4" href="#">PENGHARGAAN</a></li>
              <li><a id="s5" href="#">STASIUN PEMANCAR</a></li>
              <li><a id="s6" href="#">PROGRAM ANTV</a></li>
              <li><a id="s7" class="end" href="#">SUMBER DAYA MANUSIA</a></li>
            </ul>
          </div>
        
        </div>
        
        <div class="col-xs-6 col-sm-3 col-xs-push-3 col-sm-push-0 box box2 pulltop2">
          <div class="box_content">
            <img class="cover" src="images/kebijakan_mutu.jpg" width="250" height="500">
          </div>
        </div>
      
      </div>
      
      <!-- S: DEWAN KOMISARIS -->
      <div id="dewan_komisaris" class="row s1">
      	<?php include"includes/dewan_komisaris.php"; ?>      
      </div>
      <!-- E: DEWAN KOMISARIS -->
      
      <!-- S: DEWAN DIREKSI -->
      <div id="dewan_direksi" class="row s2">
      	<?php include"includes/dewan_direksi.php"; ?>      
      </div>
      <!-- E: DEWAN DIREKSI -->
      
      <!-- S: SENIOR MANAGEMENT -->
      <div id="senior_management" class="row s3">
      	<?php include"includes/senior_management.php"; ?>      
      </div>
      <!-- E: SENIOR MANAGEMENT -->
      
      <!-- S: PENGHARGAAN -->
      <div id="penghargaan" class="row s4">
      	<?php include"includes/penghargaan.php"; ?>      
      </div>
      <!-- E: PENGHARGAAN -->
      
      <!-- S: STASIUN PEMANCAR -->
      <div id="stasiun_pemancar" class="row s5">
      	<?php include"includes/stasiun_pemancar.php"; ?>      
      </div>
      <!-- E: PENGHARGAAN -->
      
      <!-- S: PROGRAM -->
      <div id="program" class="row s6">
      	<?php include"includes/program.php"; ?>      
      </div>
      <!-- E: PROGRAM -->
      
      <!-- S: SDM -->
      <div id="sdm" class="row s7">
      	<?php include"includes/sdm.php"; ?>      
      </div>
      <!-- E: SDM -->
              
      <?php include"includes/footer.php" ?>
      
      </div><!-- /.container -->

      <?php include"includes/js.php"; ?>
      
  </body>
</html>