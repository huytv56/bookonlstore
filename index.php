<!DOCTYPE html>
<html lang="">
	<head>
		<title>Book Store</title>
		<meta charset="UTF-8">
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<!--Customer CSS -->
		<link href="css/style.css" rel="stylesheet" media="screen">
	</head>

	<body>
		<header><!--start header-->
			<div class="container"><!--start top header-->
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-4">
							<div class="logo text-left">
								<a href="#"> <img src="img/logo.png" alt="Book Store" /></a>
							</div>
							
						</div>
						<div class="col-md-4">
							<div class="search-w">
								<div class="input-group">
									<input type="text" class="form-control">
									<span class="input-group-btn">
										<button class="btn btn-success" type="button">
											<i class ="glyphicon glyphicon-search"> Search</i>
										</button>
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="pull-right">
								<div class ="cart-w">
									<span>
										<i class="glyphicon glyphicon-shopping-cart"></i>
										<strong> Your cart</strong><br/>
										<strong>$125.0 </strong>
										<button type="button" class="btn btn-success btn-sm">Checkout</button>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--end top header-->
			<div class="main-nav col-md-12">
				<div class="container">
					<div class="row">
						<ul class="nav nav-pills">
							<li class="active">
								<a href="#">Home</a>
							</li>
							<li class="dropdown">
								<a href="#" class="drop-down-toggle" data-toggle="dropdown">
									Products
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">New product</a></li>
									<li><a href="#">Top product</a></li>
								</ul>
							</li>
							<li><a href="#">News</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
			</div><!--end head nav-->
		</header><!--end header-->

		<section class="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-generic" data-slide-to="1"></li>
								<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							</ol>
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="img/banner1.jpg" alt="Banner 1">
									<div class="carousel-caption">
										<h3>Demo banner</h3>
										<p>Caption your book here!</p>
									</div>
								</div>
								<div class="item">
									<img src="img/banner2.jpg" alt="Banner 2">
									<div class="carousel-caption">
										<h3>Demo banner</h3>
										<p>Caption your book here!</p>
									</div>
								</div>
								<div class="item">
									<img src="img/banner3.jpg" alt="Banner 3">
									<div class="carousel-caption">
										<h3>Demo banner</h3>
										<p>Caption your book here!</p>
									</div>
								</div>
							</div>
							<!-- Controls -->
							<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							</a>
						</div>
					</div>
				</div>
			</div><!--end container-->
		</section><!--end .banner-->

		<section class="content-w">
			<div class="container">
				<div class="col-md-12">
					<!--start left nav-->
					<div class="col-md-2">
						<ul class="nav nav-pills nav-stacked">
							<li><strong>Catagories</strong>
							<li class="active"><a href="#">Children</a></li>
							<li><a href="#">Science</a></li>
							<li><a href="#">Fantasy</a></li>
							<li><a href="#">Mystery</a></li>
							<li><a href="#">Romance</a></li>
							<li><a href="#">Horror</a></li>
							<li><a href="#">Poety</a></li>
							<li><a href="#">Crime</a></li>
						</ul>
					</div><!--end left nav-->

					<!--start main content-->
					<div class="col-md-10">
						<div class="col-md-12">
							<div class="row">
								<div class="col-sm-3 col-lg-3 col-md-3">
			                        <div class="thumbnail">
			                            <img src="img/product/1.png" alt="">
			                            <div class="caption">
			                                <h4 class="pull-right">$24.99</h4>
			                                <h4><a href="#">First Product</a>
			                                </h4>
			                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
			                            </div>
			                        </div>
			                    </div>

			                    <div class="col-sm-3 col-lg-3 col-md-3">
			                        <div class="thumbnail">
			                            <img src="img/product/2.png" alt="">
			                            <div class="caption">
			                                <h4 class="pull-right">$64.99</h4>
			                                <h4><a href="#">Second Product</a>
			                                </h4>
			                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			                            </div>
			                        </div>
			                    </div>

			                    <div class="col-sm-3 col-lg-3 col-md-3">
			                        <div class="thumbnail">
			                            <img src="img/product/3.png" alt="">
			                            <div class="caption">
			                                <h4 class="pull-right">$74.99</h4>
			                                <h4><a href="#">Third Product</a>
			                                </h4>
			                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			                            </div>
			                        </div>
			                    </div>

			                    <div class="col-sm-3 col-lg-3 col-md-3">
			                        <div class="thumbnail">
			                            <img src="img/product/4.png" alt="">
			                            <div class="caption">
			                                <h4 class="pull-right">$24.99</h4>
			                                <h4><a href="#">Fourth Product</a>
			                                </h4>
			                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
			                            </div>
			                        </div>
			                    </div>
			                </div>

			                <div class="row">
			                    <div class="col-sm-3 col-lg-3 col-md-3">
			                        <div class="thumbnail">
			                            <img src="img/product/1.png" alt="">
			                            <div class="caption">
			                                <h4 class="pull-right">$24.99</h4>
			                                <h4><a href="#">First Product</a>
			                                </h4>
			                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
			                            </div>
			                        </div>
			                    </div>

			                    <div class="col-sm-3 col-lg-3 col-md-3">
			                        <div class="thumbnail">
			                            <img src="img/product/2.png" alt="">
			                            <div class="caption">
			                                <h4 class="pull-right">$64.99</h4>
			                                <h4><a href="#">Second Product</a>
			                                </h4>
			                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			                            </div>
			                        </div>
			                    </div>

			                    <div class="col-sm-3 col-lg-3 col-md-3">
			                        <div class="thumbnail">
			                            <img src="img/product/3.png" alt="">
			                            <div class="caption">
			                                <h4 class="pull-right">$74.99</h4>
			                                <h4><a href="#">Third Product</a>
			                                </h4>
			                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			                            </div>
			                        </div>
			                    </div>

			                    <div class="col-sm-3 col-lg-3 col-md-3">
			                        <div class="thumbnail">
			                            <img src="img/product/4.png" alt="">
			                            <div class="caption">
			                                <h4 class="pull-right">$24.99</h4>
			                                <h4><a href="#">Fourth Product</a>
			                                </h4>
			                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            
			                <div class="row">
			                    <div class="col-sm-3 col-lg-3 col-md-3">
			                        <div class="thumbnail">
			                            <img src="img/product/1.png" alt="">
			                            <div class="caption">
			                                <h4 class="pull-right">$24.99</h4>
			                                <h4><a href="#">First Product</a>
			                                </h4>
			                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
			                            </div>
			                        </div>
			                    </div>

			                    <div class="col-sm-3 col-lg-3 col-md-3">
			                        <div class="thumbnail">
			                            <img src="img/product/2.png" alt="">
			                            <div class="caption">
			                                <h4 class="pull-right">$64.99</h4>
			                                <h4><a href="#">Second Product</a>
			                                </h4>
			                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			                            </div>
			                        </div>
			                    </div>

			                    <div class="col-sm-3 col-lg-3 col-md-3">
			                        <div class="thumbnail">
			                            <img src="img/product/3.png" alt="">
			                            <div class="caption">
			                                <h4 class="pull-right">$74.99</h4>
			                                <h4><a href="#">Third Product</a>
			                                </h4>
			                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			                            </div>
			                        </div>
			                    </div>

			                    <div class="col-sm-3 col-lg-3 col-md-3">
			                        <div class="thumbnail">
			                            <img src="img/product/4.png" alt="">
			                            <div class="caption">
			                                <h4 class="pull-right">$24.99</h4>
			                                <h4><a href="#">Fourth Product</a>
			                                </h4>
			                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
			                            </div>
			                        </div>
			                    </div>

			                </div>

			                <div class="row">
			                    <div class="col-sm-3 col-lg-3 col-md-3">
			                        <div class="thumbnail">
			                            <img src="img/product/1.png" alt="">
			                            <div class="caption">
			                                <h4 class="pull-right">$24.99</h4>
			                                <h4><a href="#">First Product</a>
			                                </h4>
			                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
			                            </div>
			                        </div>
			                    </div>

			                    <div class="col-sm-3 col-lg-3 col-md-3">
			                        <div class="thumbnail">
			                            <img src="img/product/2.png" alt="">
			                            <div class="caption">
			                                <h4 class="pull-right">$64.99</h4>
			                                <h4><a href="#">Second Product</a>
			                                </h4>
			                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			                            </div>
			                        </div>
			                    </div>

			                    <div class="col-sm-3 col-lg-3 col-md-3">
			                        <div class="thumbnail">
			                            <img src="img/product/3.png" alt="">
			                            <div class="caption">
			                                <h4 class="pull-right">$74.99</h4>
			                                <h4><a href="#">Third Product</a>
			                                </h4>
			                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			                            </div>
			                        </div>
			                    </div>

			                    <div class="col-sm-3 col-lg-3 col-md-3">
			                        <div class="thumbnail">
			                            <img src="img/product/4.png" alt="">
			                            <div class="caption">
			                                <h4 class="pull-right">$24.99</h4>
			                                <h4><a href="#">Fourth Product</a>
			                                </h4>
			                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
			                            </div>
			                        </div>
			                    </div>
			                </div><!--end row-->
			            </div><!--end col-md-12-->
					</div><!--end clo-md-10-->
				</div>
			</div><!--end container-->
		</section><!--end .content-w-->
		



		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>