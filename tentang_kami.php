<!DOCTYPE html>
<html lang="en">
  
  <?php  include"includes/head.php"; ?>

  <body class="no-js">
  <div id="overlay"></div>
  
	<div id="main" class="container">
    
      <?php include"includes/header.php"; ?>
    
      <div id="header">
        <img class="cover" src="images/banner_tentang_kami.jpg" alt="">
      </div>
      
      <div id="about" class="row clearfix">
      
        <div id="share" class="col-xs-12 col-sm-12 black">
          <div class="box_content">
            <a href="#" class="icon icon-facebook"></a>
            <a href="#" class="icon icon-twitter"></a>
            <a href="#" class="icon icon-youtube"></a>
            <a href="#" class="icon icon-gplus"></a>
          </div>
        </div>
        
        <?php include"includes/profil_perusahaan.php"; ?>
        <?php include"includes/kebijakan_mutu.php"; ?>
        
      </div>
              
      <!-- S: DEWAN KOMISARIS -->
      <div id="dewan_komisaris" class="row">
      	<?php include"includes/dewan_komisaris.php"; ?>      
      </div>
      <!-- E: DEWAN KOMISARIS -->
      
      <!-- S: DEWAN DIREKSI -->
      <div id="dewan_direksi" class="row">
      	<?php include"includes/dewan_direksi.php"; ?>      
      </div>
      <!-- E: DEWAN DIREKSI -->
      
      <!-- S: SENIOR MANAGEMENT -->
      <div id="senior_management" class="row">
      	<?php include"includes/senior_management.php"; ?>      
      </div>
      <!-- E: SENIOR MANAGEMENT -->
      
      <!-- S: PENGHARGAAN -->
      <div id="penghargaan" class="row">
      	<?php include"includes/penghargaan.php"; ?>      
      </div>
      <!-- E: PENGHARGAAN -->
      
      <!-- S: STASIUN PEMANCAR -->
      <div id="stasiun_pemancar" class="row">
      	<?php include"includes/stasiun_pemancar.php"; ?>      
      </div>
      <!-- E: PENGHARGAAN -->
      
      <!-- S: PROGRAM -->
      <div id="program" class="row">
      	<?php include"includes/program.php"; ?>      
      </div>
      <!-- E: PROGRAM -->
      
      <!-- S: SDM -->
      <div id="sdm" class="row">
      	<?php include"includes/sdm.php"; ?>      
      </div>
      <!-- E: SDM -->
              
      <?php include"includes/footer.php" ?>
      
      </div><!-- /.container -->

      <?php include"includes/js.php"; ?>

  </body>
</html>