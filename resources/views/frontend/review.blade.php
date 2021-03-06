	<!DOCTYPE html>
	@extends('layouts.head')

@section('content')
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Review Titik Temu</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('assets/frontend/css/linearicons.css')}}">
			<link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{asset('assets/frontend/css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{asset('assets/frontend/css/nice-select.css')}}">			
			<link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{asset('assets/frontend/css/main.css')}}">
		</head>
		<body>

<section class="banner-area" id="home">	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-7">
						<br>
						<br>
						<br>
						<br>
						<br>
						  <a href=""> <img src="{{ asset ('assets/frontend/img/maknacarita.png')}}"  style="width:500px; height:250px;" alt="" title="" /></a>
							<div>
							{{-- <a href="{{route ('frontend.menu')}}" class="primary-btn text-uppercase">pesan sekarang</a> --}}
						</div>											
					</div>
				</div>
			</section>

	<!-- Start review Area -->
			<section class="review-area section-gap" id="review">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Ulasan Titik Temu Kopi</h1>
								<p></p>
							</div>
						</div>
					</div>
					
<div class="row">
@foreach ($review as $data )
	<div class="col-sm-6">
		<div class="card border-secondary mb-6">
			<div class="card-body text-dark">
				<h5 class="card-title"> {{$data->penulis}}</h5>
				<img src="{{ asset('assets/img/review/'.$data->foto) }}"  style="width:90px; height:90px;" alt="" align="left" border="5">
				<p class="card-text">{!! $data->review !!}</p>
			</div>
		</div>
	</div>
@endforeach
</div>
			</section>
			<!-- End review Area -->

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
			
			<script src=" {{asset('assets/frontend/js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src=" {{asset('assets/frontend/js/vendor/bootstrap.min.js')}}"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src=" {{asset('assets/frontend/js/easing.min.js')}}"></script>			
			<script src=" {{asset('assets/frontend/js/hoverIntent.js')}}"></script>
			<script src=" {{asset('assets/frontend/js/superfish.min.js')}}"></script>	
			<script src=" {{asset('assets/frontend/js/jquery.ajaxchimp.min.js')}}"></script>
			<script src=" {{asset('assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>	
			<script src=" {{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>			
			<script src=" {{asset('assets/frontend/js/jquery.sticky.js')}}"></script>
			<script src=" {{asset('assets/frontend/js/jquery.nice-select.min.js')}}"></script>			
			<script src=" {{asset('assets/frontend/js/parallax.min.js')}}"></script>	
			<script src=" {{asset('assets/frontend/js/mail-script.js')}}"></script>				
			<script src=" {{asset('assets/frontend/js/main.js')}}"></script>	
		</body>
	</html>
