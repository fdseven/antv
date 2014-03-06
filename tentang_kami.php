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
          <li><img src="images/banner.jpg" alt=""><!--<p class="caption">This is a caption 1</p>--></li>
          <li><img src="images/banner2.jpg" alt=""><!--<p class="caption">This is a caption 2</p>--></li>
          <li><img src="images/banner3.jpg" alt=""><!--<p class="caption">This is a caption 3</p>--></li>
        </ul>
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