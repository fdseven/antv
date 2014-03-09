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
              
      <?php include"includes/footer.php" ?>
      
      </div><!-- /.container -->

      <?php include"includes/js.php"; ?>

  </body>
</html>