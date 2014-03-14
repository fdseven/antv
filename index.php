<!DOCTYPE html>
<html lang="en">
  
  <?php  include"includes/head.php"; ?>

  <body class="no-js">
  <div id="overlay"></div>
  
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
          <li><img class="lazy" src="images/banner.jpg" alt=""><!--<p class="caption">This is a caption 1</p>--></li>
          <li><img class="lazy" src="images/banner2.jpg" alt=""><!--<p class="caption">This is a caption 2</p>--></li>
          <li><img class="lazy" src="images/banner3.jpg" alt=""><!--<p class="caption">This is a caption 3</p>--></li>
        </ul>
      </div>
      
      <div id="row_1" class="row">
      
        <div id="share" class="col-xs-12 col-sm-3 col-sm-push-6 box">
          <div class="box_content">
            <a href="#" class="icon icon-facebook"></a>
            <a href="#" class="icon icon-twitter"></a>
            <a href="#" class="icon icon-youtube"></a>
            <a href="#" class="icon icon-gplus"></a>
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 col-sm-push-6 hidden-xs box">
          <div class="box_content black">
            <ul id="kanal_menu">
              <li><a class="female" href="female.php">FEMALE</a></li>
              <li><a class="kids" href="kids_teen.php">KIDS & TEEN</a></li>
              <li><a class="family" href="family.php">FAMILY</a></li>
              <li><a class="male" href="male.php">MALE</a></li>
              <li><a href="antvlovers.php">ANTVLOVERS</a></li>
            </ul>
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 col-sm-pull-6 box">
          <div class="box_content red">
            <img class="box_mask lazy" src="images/mask.png">
            <h4 class="jdl_program">CAMPUR<br>CAMPUR</h4>
            <p class="hari">SETIAP HARI</p>
            <h1 class="jam">19<br>.30 <p>WIB</p></h1>
          </div>
        </div>
        
        <div id="1" class="col-xs-6 col-sm-3 col-sm-pull-6 box pview">
          <div class="box_content red">
          <img class="cover lazy" src="images/melaney.jpg">
            <div id="a" class="description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
          </div>
        </div>
        
        <div class="col-xs-12 col-sm-6 box">
          <div id="2" class="box_content row pview red">
          
            <div class="col-xs-6 col-sm-6 box gantung">
              <div class="box_content">
                <img class="box_mask lazy" src="images/mask.png">
                <h4 class="jdl_program">SUPER DEAL</h4>
                <p class="hari">SENIN - KAMIS</p>
                <h1 class="jam">19<br>.00 <p>WIB</p></h1>
              </div>
            </div>
            
            <img class="cover lazy" src="images/uya.jpg">
            
            <div id="b" class="description right col-xs-6 col-sm-6">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
            
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content red">
            <img class="box_mask lazy" src="images/mask.png">
            <h4 class="jdl_program">CATATAN<br>SI OLGA</h4>
            <p class="hari">JUMAT - MINGGU</p>
            <h1 class="jam">21<br>.00 <p>WIB</p></h1>
          </div>
        </div>
        
        <div id="1" class="col-xs-6 col-sm-3 box pview">
          <div class="box_content red">
          <img class="cover lazy" src="images/olga.jpg">
            <div id="a" class="description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content blue">
            <img class="box_mask lazy" src="images/mask.png">
            <h4 class="jdl_program">MATA<br>LENSA</h4>
            <p class="hari">SABTU</p>
            <h1 class="jam">24<br>.00 <p>WIB</p></h1>
          </div>
        </div>
        
        <div id="1" class="col-xs-6 col-sm-3 box pview">
          <div class="box_content blue">
          <img class="cover lazy" src="images/lensa.jpg">
            <div id="a" class="description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content blue">
            <img class="box_mask lazy" src="images/mask.png">
            <h4 class="jdl_program">FANTASTIC WORLD CUP</h4>
            <p class="hari">MINGGU</p>
            <h1 class="jam">23<br>.30 <p>WIB</p></h1>
          </div>
        </div>
        
        <div id="1" class="col-xs-6 col-sm-3 box pview">
          <div class="box_content blue">
          <img class="cover lazy" src="images/bola.jpg">
            <div id="a" class="description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
          </div>
        </div>
        
        <div class="col-xs-12 col-sm-6 box pull-right">
          <div id="2" class="box_content row pview red">
          
            <div class="col-xs-6 col-sm-6 box gantung kanan">
              <div class="box_content red">
                <img class="box_mask lazy" src="images/mask.png">
                <h4 class="jdl_program">PESBUKERS</h4>
                <p class="hari">SENIN - KAMIS</p>
                <h1 class="jam">17<br>.00 <p>WIB</p></h1>
              </div>
            </div>
            
            <img class="cover lazy" src="images/rafi.jpg">
            
            <div id="b" class="description col-xs-6 col-sm-6">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
            
          </div>
        </div>
        
        <div class="col-xs-6 col-sm-3 box">
          <div class="box_content yellow">
            <img class="box_mask lazy" src="images/mask.png">
            <h4 class="jdl_program">MASHA AND<br>THE BEAR</h4>
            <p class="hari">SETIAP HARI</p>
            <h1 class="jam">16<br>.30 <p>WIB</p></h1>
          </div>
        </div>
        
        <div id="1" class="col-xs-6 col-sm-3 box pview">
          <div class="box_content yellow">
          <img class="cover lazy" src="images/masha.jpg">
            <div id="a" class="description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
          </div>
        </div>
        
      </div>
      <!--END: #row_1-->
      
      <div id="row_2" class="row white">
      
        <div class="col-xs-6 col-sm-4 fixed_height">
          <div class="box_title"><span class="icon icon-youtube"></span> whatsonANTV</div>
          <iframe width="100%" height="82%" src="//www.youtube.com/embed/pah2IJ0XaGI" frameborder="0" allowfullscreen></iframe>
        </div>
        
        <div class="col-xs-6 col-sm-4 fixed_height">
          <div class="box_title"><span class="icon icon-facebook"></span> ANTV LOVERS</div>
            <div class="fb-like-box" data-href="https://www.facebook.com/pages/antv-lovers/152528918100149" data-width="100%" data-height="100%" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
        </div>
        
        <div class="col-xs-6 col-sm-4 fixed_height">
          <div class="box_title"><span class="icon icon-twitter2"></span> @whatsonANTV</div>
          <a class="twitter-timeline" href="https://twitter.com/topikANTV" data-widget-id="440162177152872448">Tweets by @topikANTV</a>
		  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
        
        <div class="col-xs-6 col-sm-4">
          <div class="box_title"><span class="icon icon-pen"></span> Jadwal Hari Ini</div>
          <div class="scroll">
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
            </table>
          </div>
        </div>
        
        <div class="col-xs-12 col-sm-8">
          <img class="cover lazy" src="images/anime.jpg">
        </div>
      
      </div>
      <!--END: #row_2-->
            
      <?php include"includes/footer.php" ?>
      
      </div><!-- /.container -->

      <?php include"includes/js.php"; ?>
    
  </body>
</html>