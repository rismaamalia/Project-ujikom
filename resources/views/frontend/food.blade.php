@extends('layouts.menu')
@section('content')
		<section class="menu-area section-gap" id="coffee">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Food</h1>
								<p>Cipta Rasa, Makna Carita</p>
							</div>
						</div>
					</div>						
<div class="row">
	@foreach ($makanan as $data)
						<div class="col-lg-4">
							<div class="single-menu">
								<center><h4>{{$data->makanan}}</h4></center>
										<br/>
								<div class="title-div justify-content-between d-flex">
									 <a href=""><img src="{{ asset('assets/img/makanan/'.$data->foto) }}"  style="width:80px; height:80px;" align="left" alt="" title="" /></a>
									<p class="price">
										<br>Rp. {{ $data->harga }} 
								</div>
								{{-- <p>
								{!! $data->deskripsi !!}</p> --}}
								</p>								
							</div>
						</div>
							@endforeach															
					</div>
				</div>	
				</div>	
					<br><br>
				<center>	<a href="/registermembers" class="btn btn-outline-primary">Pesan Tempat</a></center>
			</section>
			<!-- End menu Area -->			
			

@endsection