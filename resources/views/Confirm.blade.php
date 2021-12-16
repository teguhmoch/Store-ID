
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Konfirmasi Pembayaran | E-Shopper</title>
        <link href="/BahanStudy/css/bootstrap.min.css" rel="stylesheet">
        <link href="/BahanStudy/css/font-awesome.min.css" rel="stylesheet">
        <link href="/BahanStudy/css/prettyPhoto.css" rel="stylesheet">
        <link href="/BahanStudy/css/price-range.css" rel="stylesheet">
        <link href="/BahanStudy/css/animate.css" rel="stylesheet">
   <link href="/BahanStudy/css/main.css" rel="stylesheet">
   <link href="/BahanStudy/css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/BahanStudy/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/BahanStudy/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/BahanStudy/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/BahanStudy/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
   <header id="header"><!--header-->
     <?php
 			$id = Session::get('id');
 		?>
           <div class="header-middle"><!--header-middle-->
                   <div class="container">
                           <div class="row">
                                   <div class="col-md-4 clearfix">
                                           <div class="logo pull-left">
                                                   <a href="/"><img src="/BahanStudy/images/home/logo.png" alt="" /></a>
                                           </div>

                                   </div>
                                   <div class="col-md-8 clearfix">
                                           <div class="shop-menu clearfix pull-right">
                                                   <ul class="nav navbar-nav">
                                                     <?php if($id != null){?>
                                                    <li><a href="/Checkout"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                                    <li><a href="/Cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                                    <li><a href="/logout"><i class="fa fa-lock"></i> Logout</a></li>
                                                     <li><a href="/"> Hallo,</a></li>
                                                   <?php }else{?>
                                                     <li><a href="/Login"><i class="fa fa-lock"></i> Login</a></li>
                                                   <?php }?>
                                                   </ul>
                                           </div>
                                   </div>
                           </div>
                   </div>
           </div><!--/header-middle-->

           <div class="header-bottom"><!--header-bottom-->
                   <div class="container">
                           <div class="row">
                                   <div class="col-sm-9">
                                           <div class="navbar-header">
                                                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                                           <span class="sr-only">Toggle navigation</span>
                                                           <span class="icon-bar"></span>
                                                           <span class="icon-bar"></span>
                                                           <span class="icon-bar"></span>
                                                   </button>
                                           </div>
                                           <div class="mainmenu pull-left">
                                                   <ul class="nav navbar-nav collapse navbar-collapse">
                                                           <li><a href="/">Home</a></li>
                                                           <li><a href="#">Contact</a></li>
                                                           <li><a href="/Confirm" class="active">Confirm</a></li>
                                                   </ul>
                                           </div>
                                   </div>
                                   <div class="col-sm-3">
                                           <div class="search_box pull-right">
                                                   <input type="text" placeholder="Search"/>
                                           </div>
                                   </div>
                           </div>
                   </div>
           </div><!--/header-bottom-->
   </header><!--/header-->
   <section id="form"><!--form-->
           <div class="container">
                   <div class="row">
                           <div class="col-sm-4 col-sm-offset-1">
                                   <div class="login-form"><!--login form-->
                                           <h2>Konfirmasi</h2>
                                           <form action="/Konfirm" enctype="multipart/form-data" method="POST">
                                                   <input type="text" placeholder="ID Token" name="id_token" id="id_token"/>
                                                   <input type="file" name="file" id="file"/>
                                                   <p><i>*Maksimal File Upload 2 MB<i></p>
                                                   <button type="submit" class="btn btn-default">Confirm</button>
                                           </form>
                                   </div><!--/login form-->
                           </div>
                   </div>
           </div>
   </section><!--/form-->


   <footer id="footer"><!--Footer-->

           <div class="footer-bottom">
                   <div class="container">
                           <div class="row">
                                   <p class="pull-left">Copyright (c) 2013 E-SHOPPER Inc. All rights reserved.</p>
                                   <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
                           </div>
                   </div>
           </div>

   </footer><!--/Footer-->

<script src="/BahanStudy/js/jquery.js"></script>
<script src="/BahanStudy/js/price-range.js"></script>
<script src="/BahanStudy/js/jquery.scrollUp.min.js"></script>
<script src="/BahanStudy/js/bootstrap.min.js"></script>
<script src="/BahanStudy/js/jquery.prettyPhoto.js"></script>
<script src="/BahanStudy/js/main.js"></script>
</body>
</html>
