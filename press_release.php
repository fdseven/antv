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
      
      <div id="press_release" class="row">
        
        <!--Pengecualian box share karena di tengah-->
        <div id="share" class="col-xs-12 col-sm-12 top2">
          <div>
            <?php include "includes/social_media_links.php"; ?>
          </div>
        </div>
      
        <div class="col-xs-12 col-sm-6">
          <div class="row">
          
          	<div class="col-xs-12 col-sm-6 box light_grey2">
              <div class="box_content">
              	<img class="box_mask lazy" src="images/mask.png" width="250" height="158">
        		<h3 class="head_title">PRESS <br class="hidden-xs"><span>RELEASE</span></h3>
              </div>
            </div>
            
            <div class="clearfix"></div>
            
            <div class="col-xs-12 col-sm-6 box box3">
              <div class="box_content grey">
                <h5 class="head_title"><span>ANTV TAYANGKAN BEST</span> <br class="hidden-xs">MATCH PIALA DUNIA</h5>
                <article>
                  <?php include"includes/press_release_kolom1.txt"; ?> 
				</article>
              </div>
            </div>
            
            <div class="col-xs-12 col-sm-6 box box4 pulltop">
              <div class="box_content grey grey2">
              	 <h5 class="head_title"><span>FANTASTIC WORLD CUP</span> <br class="hidden-xs">BEST MATCH</h5>
                 <article>
                   <?php include"includes/press_release_kolom2.txt"; ?> 
                 </article>
              </div>
            </div>
                        
          </div>
        </div>
        
        <div class="col-xs-12 col-sm-6">
          <div class="row">
          
            <div id="share" class="col-xs-12 col-sm-6 hidden-xs box">
              <div class="box_content">
                <?php include "includes/social_media_links.php"; ?>
              </div>
            </div>
            
            <div class="col-xs-6 col-sm-6 hidden-xs box">
              <div class="box_content black">
                <ul id="kanal_menu">
                  <?php include"includes/kanal_menu.txt"; ?>
                </ul>
              </div>
            </div>
            
            <div class="col-xs-12 col-sm-6 box box2">
              <div class="box_content grey">
              	 <br><br>
                 <article>
                   <?php include"includes/press_release_kolom3.txt"; ?>
                 </article>
              </div>
            </div>
            
            <div class="col-xs-12 col-sm-6 box box3 pull-right">
              <div class="box_content black">
              	 <h3 class="head_title">ARSIP</h3>
                 
                 <article class="accordion">
                   <ul>
                     <li>
                       <h5 class="title">2014</h5>
                       <?php include"includes/press_release_arsip_2014.txt"; ?>
                     </li>
                     <li>
                       <h5 class="title">2013</h5>
                       <?php include"includes/press_release_arsip_2013.txt"; ?>
                     </li>
                     <li>
                       <h5 class="title">2012</h5>
                       <?php include"includes/press_release_arsip_2012.txt"; ?>
                     </li>
                     <li>
                       <h5 class="title">2011</h5>
                       <?php include"includes/press_release_arsip_2011.txt"; ?>
                     </li>
                   </ul>
                 </article>

              </div>
            </div>
            
            <div class="col-xs-12 col-sm-6 box">
              <div class="box_content white">
              	 <h5 class="head_title"><span>INFORMASI</span> <br class="hidden-xs">LEBIH LANJUT :</h5>
                 <article>
                 <p>
                 Komplek Rasuna Epicentrum Lot.9<br>
                 Jl.H.R Rasuna Said, Karet Kuningan Setiabudi, Jakarta Selatan<br>
                 Telp : (62-21) 5610 1555<br>
                 Fax : (62-21) 2994 1786
                 </p> 
                 </article>
              </div>
            </div>
          
          </div>
        </div>
      
      </div>
      <!--END: #press_release-->
      
      <?php include"includes/footer.php" ?>
      
      </div><!-- /.container -->

      <?php include"includes/js.php"; ?>
    
  </body>
</html>