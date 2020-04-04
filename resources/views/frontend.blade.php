	<!DOCTYPE html>
	@extends('layouts.head')

@section('content')
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png')}}">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Titik Temu</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href={{ asset ('assets/frontend/css/linearicons.css')}}>
			<link rel="stylesheet" href={{ asset ('assets/frontend/css/font-awesome.min.css')}}>
			<link rel="stylesheet" href={{ asset ('assets/frontend/css/bootstrap.css')}}>
			<link rel="stylesheet" href={{ asset ('assets/frontend/css/magnific-popup.css')}}>
			<link rel="stylesheet" href={{ asset ('assets/frontend/css/nice-select.css')}}>					
			<link rel="stylesheet" href={{ asset ('assets/frontend/css/animate.min.css')}}>
			<link rel="stylesheet" href={{ asset ('assets/frontend/css/owl.carousel.css')}}>
			<link rel="stylesheet" href={{ asset ('assets/frontend/css/main.css')}}>
		</head>
		<body>

			<!-- start banner Area -->
			<section class="banner-area" id="home">	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-7">
						<br>
						<br>
						<br>
						<br>
						<br>
						  <a href=""> <img src="{{ asset ('assets/frontend/img/maknacarita.png')}}"  style="width:600px; height:300px;" alt="" title="" /></a>
							<br>
							<br>
						
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

		

				<section class="menu-area section-gap" id="menu">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">MENU TITIK TEMU</h1>
								<p>Cipta Rasa, Makna Carita</p>
								
										
							</div>
						</div>
					</div>						
			<div class="row">
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									 <a href=""></a>
									<h4>MINUMAN</h4>
									<p class="price float-right">
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
								<center>	<a href="/minuman" class="btn btn-outline-secondary">Menu</a>	
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									 <a href=""></a>
									<h4>BIJI KOPI</h4>
									<p class="price float-right">
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
								<center>	<a href="/bijikopi" class="btn btn-outline-secondary">Menu</a>	
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									 <a href=""></a>
									<h4>MAKANAN</h4>
									<p class="price float-right">
										</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>	
										<center>	<a href="/makanan" class="btn btn-outline-secondary">Menu</a>								
							</div>
						</div>	
					</div>
						</div>	
			</section>
			<!-- End video-sec Area -->
			
			<!-- Start menu Area -->
			{{-- <section class="menu-area section-gap" id="menu">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Beberapa Jenis Kopi yang Kami Sajikan</h1>
								<p>Cipta Rasa, Makna Carita</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									 <a href=""><img src="{{ asset ('assets/frontend/img/temu3.jpg')}}"  style="width:80px; height:80px;" alt="" title="" /></a>
									<h4>Cappuccino</h4>
									<p class="price float-right">
										15k
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									 <a href=""><img src="{{ asset ('assets/frontend/img/b1.jpg')}}"  style="width:80px; height:80px;" alt="" title="" /></a>
									<h4>Americano</h4>
									<p class="price float-right">
										15k
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									 <a href=""><img src="{{ asset ('assets/frontend/img/espresso.jpg')}}"  style="width:80px; height:80px;" alt="" title="" /></a>
									<h4>Espresso</h4>
									<p class="price float-right">
										15k
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
							</div>
						</div>	
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									 <a href=""><img src="{{ asset ('assets/frontend/img/matcha-latte.jpg')}}"  style="width:80px; height:80px;" alt="" title="" /></a>
									<h4>Macchiato</h4>
									<p class="price float-right">
										15k
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									 <a href=""><img src="{{ asset ('assets/frontend/img/mocha.jpg')}}"  style="width:80px; height:80px;" alt="" title="" /></a>
									<h4>Mocha</h4>
									<p class="price float-right">
										15k
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									 <a href=""><img src="{{ asset ('assets/frontend/img/coffelatte.jpg')}}"  style="width:80px; height:80px;" alt="" title="" /></a>
									<h4>Coffee Latte</h4>
									<p class="price float-right">
										15k
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									 <a href=""><img src="{{ asset ('assets/frontend/img/piccolo.jpg')}}"  style="width:80px; height:80px;" alt="" title="" /></a>
									<h4>Piccolo Latte</h4>
									<p class="price float-right">
										15k
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									 <a href=""><img src="{{ asset ('assets/frontend/img/ristretto.jpg')}}"  style="width:80px; height:80px;" alt="" title="" /></a>
									<h4>Ristretto</h4>
									<p class="price float-right">
										15k
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									 <a href=""><img src="{{ asset ('assets/frontend/img/affogato.jpg')}}"  style="width:80px; height:80px;" alt="" title="" /></a>
									<h4>Affogato</h4>
									<p class="price float-right">
										15k
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								
							</div>
						</div>															
					</div>
				</div>	
			</section> --}}
			<!-- End menu Area -->
			
			<!-- Start gallery Area -->
			<section class="gallery-area section-gap" id="gallery">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Gallery Titik Temu Kopi</h1>
								<p>"Kita ini secangkir kopi. Kamu cangkirnya, Aku Kopinya. Peminumnya adalah malam, hujan, puisi" <br> -Joko Pinurbo-</p>
							</div>
						</div>
					</div>						
							<div class="row">
						<div class="col-lg-4">
							<a href=" {{ asset('assets/frontend/img/temu1.jpg')}}" class="img-pop-home">
								<img class="img-fluid" src="{{asset('assets/frontend/img/temu1.jpg')}}" alt="">
							</a>	
							<a href=" {{ asset('assets/frontend/img/temu7.jpg')}}" class="img-pop-home">
								<img class="img-fluid" style="width:400px; height:500px;" src="{{asset('assets/frontend/img/temu7.jpg')}}" alt="">
							</a>	
						</div>
						<div class="col-lg-8">
							<a href=" {{ asset('assets/frontend/img/temu6.jpg')}}" class="img-pop-home">
								<img class="img-fluid" style="width:800px; height:500px;" src="{{asset('assets/frontend/img/temu6.jpg')}}" alt="">
							</a>	
							<div class="row">
								<div class="col-lg-6">
									<a href=" {{ asset('assets/frontend/img/temu5.jpg')}}" class="img-pop-home">
										<img class="img-fluid" src="{{asset('assets/frontend/img/temu5.jpg')}}" alt="">
									</a>	
								</div>
								<div class="col-lg-6">
									<a href=" {{ asset('assets/frontend/img/temu4.jpg')}}" class="img-pop-home">
										<img class="img-fluid" src="{{asset('assets/frontend/img/temu4.jpg')}}" alt="">
									</a>	
								</div>
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End gallery Area -->
			
			<!-- Start review Area -->
			<section class="review-area section-gap" id="review">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Titik Temu Kopi</h1>
								<p></p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-6 col-md-6 single-review">
							<img src="{{ asset ('assets/frontend/img/r1.png')}}" alt="">
							<div class="title d-flex flex-row">
								<h4>lorem ipusm</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>								
								</div>
							</div>
							<p>
								Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
							</p>
						</div>	
						<div class="col-lg-6 col-md-6 single-review">
							<img src="{{ asset ('assets/frontend/img/r2.png')}}" alt="">
							<div class="title d-flex flex-row">
								<h4>lorem ipusm</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>								
								</div>
							</div>
							<p>
								Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
							</p>
						</div>	
					</div>
					<div class="row counter-row">
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">2536</h1>
							<p>Happy Client</p>
						</div>
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">7562</h1>
							<p>Total Projects</p>
						</div>
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">2013</h1>
							<p>Cups Coffee</p>
						</div>
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">10536</h1>
							<p>Total Submitted</p>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End review Area -->
			
			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Titik Temu Kopi</h1>
								<p>"Lima menit menjelang minum kopi, Aku ingat pesanmu:"Kurang atau lebih, setiap rezeki perlu dirayakan dengan secangkir kopi."" <br> -Joko Pinurbo- </p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-6 col-md-6 single-blog">
							<img class="img-fluid"  style="width:400px; height:400px;" src=" {{ asset('assets/frontend/img/temu3.jpg')}}" alt="">
							<ul class="post-tags">
								<li><a href="#">Travel</a></li>
								<li><a href="#">Life Style</a></li>
							</ul>
							<a href="#"><h4>Portable latest Fashion for young women</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
							</p>
							<p class="post-date">
								31st January, 2018
							</p>
						</div>
						<div class="col-lg-6 col-md-6 single-blog">
							<img class="img-fluid"  style="width:400px; height:400px;" src=" {{ asset('assets/frontend/img/temu7.jpg')}}" alt="">
							<ul class="post-tags">
								<li><a href="#">Travel</a></li>
								<li><a href="#">Life Style</a></li>
							</ul>
							<a href="#"><h4>Portable latest Fashion for young women</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
							</p>
							<p class="post-date">
								31st January, 2018
							</p>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End blog Area -->
			

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<p class="footer-text">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>								
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info pt-20"></div>
									</form>
								</div>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	

			<script src={{ asset ('assets/frontend/js/vendor/jquery-2.2.4.min.js')}}></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src={{ asset ('assets/frontend/js/vendor/bootstrap.min.js')}}></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src={{ asset ('assets/frontend/js/easing.min.js')}}></script>			
			<script src={{ asset ('assets/frontend/js/hoverIntent.js')}}></script>
			<script src={{ asset ('assets/frontend/js/superfish.min.js')}}></script>	
			<script src={{ asset ('assets/frontend/js/jquery.ajaxchimp.min.js')}}></script>
			<script src={{ asset ('assets/frontend/js/jquery.magnific-popup.min.js')}}></script>	
			<script src={{ asset ('assets/frontend/js/owl.carousel.min.js')}}></script>			
			<script src={{ asset ('assets/frontend/js/jquery.sticky.js')}}></script>
			<script src={{ asset ('assets/frontend/js/jquery.nice-select.min.js')}}></script>			
			<script src={{ asset ('assets/frontend/js/parallax.min.js')}}></script>	
			<script src={{ asset ('assets/frontend/js/waypoints.min.js')}}></script>
			<script src={{ asset ('assets/frontend/js/jquery.counterup.min.js')}}></script>					
			<script src={{ asset ('assets/frontend/js/mail-script.js')}}></script>	
			<script src={{ asset ('assets/frontend/js/main.js')}}></script>	
		</body>
	</html>



