<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
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
							<a href="index.html"><img src="/BahanStudy/images/home/logo.png" alt="" /></a>
						</div>

					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
                <?php if($id != null){?>
               <li><a href="/Checkout"><i class="fa fa-crosshairs"></i> Checkout</a></li>
               <li><a href="/Cart" class="active"><i class="fa fa-shopping-cart"></i> Cart</a></li>
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
								<li><a href="/" class="active">Home</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="/Confirm">Confirm</a></li>
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

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                    <?php $total = 0; ?>
                    @foreach($v_cart as $c)
						<tr>
							<td class="cart_product">
								<a href=""><img src="/data_file/{{$c->image}}" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""></a>{{$c->name}}</h4>
							</td>
							<td class="cart_price">
								<p>Rp. {{$c->price}}</p>
							</td>
							<td class="cart_quantity">
                            {{$c->jumlah}}
							</td>
							<td class="cart_total">
								<p class="cart_total_price">Rp. {{$c->price * $c->jumlah}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
                        <?php $total += ($c->jumlah * $c->price) ?>
                        @endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Total <span>{{$total}}</span></li>
						</ul>
							<a class="btn btn-default check_out" href="/Checkout">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

	<footer id="footer"><!--Footer-->

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>

	</footer><!--/Footer-->



    <script src="/BahanStudy/js/jquery.js"></script>
	<script src="/BahanStudy/js/bootstrap.min.js"></script>
	<script src="/BahanStudy/js/jquery.scrollUp.min.js"></script>
    <script src="/BahanStudy/js/jquery.prettyPhoto.js"></script>
    <script src="/BahanStudy/js/main.js"></script>
</body>
</html>
