<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this website -->
    <link href="css/style.css" rel="stylesheet">
    
    <!-- Custom styles for fonts -->
    <link href="css/fonts.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="no-js">
  <div id="overlay"></div>
  
	<div id="main" class="container">
    
      <?php include"includes/header.php"; ?>
    
      <div id="header">
        <ul class="rslides" id="slider">
          <li><img src="images/banner.jpg" alt=""><!--<p class="caption">This is a caption 1</p>--></li>
          <li><img src="images/banner2.jpg" alt=""><!--<p class="caption">This is a caption 2</p>--></li>
          <li><img src="images/banner3.jpg" alt=""><!--<p class="caption">This is a caption 3</p>--></li>
        </ul>
      </div>
      
      <div id="about" class="row clearfix">
      
        <div class="col-xs-12 col-sm-6">
          <div class="row">
          
            <div class="height"></div>
            
            <div class="col-xs-12 col-sm-6 col-sm-push-6">
              <div class="row">
              
                <div class="textbox grey row_3">
                  <h5 class="head_title"><span>PROFIL</span><br>PERUSAHAAN</h5>
                  <article>
                    <p>PT Cakrawala Andalas Televisi atau yang lebih dikenal dengan sebutan ANTV hadir sebagai stasiun televisi swasta di Indonesia yang menyajikan beragam tayangan hiburan yang berkualitas, menarik serta menambah wawasan dan pengetahuan masyarakat Indonesia. Awalnya ANTV adalah stasiun televisi lokal yang siaran di wilayah Lampung dan sekitarnya.</p>
                    <p>Dengan izin siaran lokal ANTV mengudara selama lima jam sehari, kemudian ANTV mendapat Izin Siaran Nasional dari Menteri Penerangan RI dengan No. 207/RTF/K/I/1993 tgl 30 Januari 1993. Sepuluh hari setelah izin tersebut keluar ANTV dapat melakukan siaran secara nasional. Tepat 1 Maret 1993 untuk pertama kalinya ANTV memproduksi program sendiri berupa liputan berita aktual jalannya Sidang Umum DPR/MPR. Saat itu ANTV berhasil melakukan siaran langsung meliput jalannya kegiatan penting kenegaraan. Momen istimewa itu yang dijadikan sebagai hari lahirnya ANTV, kini lebih dari 19 tahun ANTV menemani masyarakat pemirsanya dengan program-program terbaik. </p>
                  </article>
                </div>
                
                <div class="col-xs-6 col-xs-push-3 col-sm-12 col-sm-push-0 box">
                  <div class="box_content">
                    <img class="cover" src="images/esc.jpg">
                  </div>
                </div>
                
              </div>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-sm-pull-6">
              <div class="row">
                
                <div class="col-xs-12 hidden-xs box">
                  <div class="box_content">
                    <img class="box_mask" src="images/mask.png">
                    <h3 class="head_title">TENTANG<br><span>KAMI</span></h3>
                  </div>
                </div>
                
                <div class="col-xs-12 box">
                  <div class="box_content grey grey2">
                    <h5 class="head_title">VISI</h5>
                    <article>
                    Menjadi saluran televisi keluarga terbaik untuk seluruh keluarga Indonesia
                    </article>
                  </div>
                </div>
                
                <div class="col-xs-6 col-xs-push-3 col-sm-12 col-sm-push-0 box">
                  <div class="box_content">
                    <img class="cover" src="images/esc.jpg">
                  </div>
                </div>
                
                <div class="col-xs-12">
                  <div class="textbox grey">
                    <h5 class="head_title">MISI</h5>
                    <article>
                    Misi yang akan dilakukan oleh ANTV untuk dapat mencapai visi tersebut adalah sebagai berikut: Memberikan program-program berkualitas terbaik setiap anggota keluarga untuk mendukung pengembangan karakter Bangsa Indonesia dengan spirit kreatifitas dan inovasi kekuatan kerjasama tim dan tata kelola perusahaan.
                    </article>
                  </div>
                </div>
                
              </div>
            </div>
          
          </div>
        </div>
        
        <div class="col-xs-12 col-sm-6">
        
        </div>
      
      </div>
      
      <?php include"includes/footer.php" ?>
      
      </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
	<script src="js/modernizr.js"></script>
    <script src="js/controller.js"></script>
  </body>
</html>