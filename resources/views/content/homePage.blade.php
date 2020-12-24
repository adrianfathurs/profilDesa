@extends('template.templatePage')
@section('content')

<!-- load css for homePage -->
<link rel="stylesheet" href="{{ asset('/css/homePage.css') }}">

<!-- banner area -->
<div>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="{{asset('images/banner/wisata.jpg')}}" alt="...">
				<div class="container">
					<!-- banner caption -->
					<div class="carousel-caption slide-one">
						<!-- heading -->
						<h2 class="animated fadeInLeftBig"> Tempat Wisata di Sambirejo!</h2>
						<!-- paragraph -->
						<h3 class="animated fadeInRightBig">Jelajahi Lebih Banyak <i class="fas fa-search-location"></i>
						</h3>
						<!-- button -->
						<a href="/wisata" class="animated fadeIn btn btn-theme">Jelajah Wisata</a>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="{{asset('images/banner/umkm.jpg')}}" alt="...">
				<div class="container">
					<!-- banner caption -->
					<div class="carousel-caption slide-two">
						<!-- heading -->
						<h2 class="animated fadeInLeftBig"> UMKM di Sambirejo!</h2>
						<!-- paragraph -->
						<h3 class="animated fadeInRightBig">Jelajahi Lebih Banyak <i class="fas fa-search-location"></i>
						</h3>
						<!-- button -->
						<a href="/umkm" class="animated fadeIn btn btn-theme">Jelajah UMKM</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
<!--/ banner end -->

<br><br>
<div class="fh5co-listing">
	
	<div class="container">
<<<<<<< HEAD
		<div class="row">
			<div class="col-md-4 col-sm-4 fh5co-item-wrap">
				<a class="fh5co-listing-item">
					<img src="{{asset('images/img-1.jpg')}}" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
					<div class="fh5co-listing-copy">
						<h2>Parisu</h2>
						<span class="icon">
							<i class="glyphicon glyphicon-arrow-right"></i>
						</span>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-4 fh5co-item-wrap">
				<a class="fh5co-listing-item">
					<img src="images/img-2.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
					<div class="fh5co-listing-copy">
						<h2>New York</h2>
						<span class="icon">
							<i class="glyphicon glyphicon-arrow-right"></i>
						</span>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-4 fh5co-item-wrap">
				<a class="fh5co-listing-item">
					<img src="images/img-3.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
					<div class="fh5co-listing-copy">
						<h2>London</h2>
						<span class="icon">
							<i class="glyphicon glyphicon-arrow-right"></i>
						</span>
					</div>
				</a>
			</div>
			<!-- END 3 row -->

			<div class="col-md-4 col-sm-4 fh5co-item-wrap">
				<a class="fh5co-listing-item">
					<img src="images/img-4.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
					<div class="fh5co-listing-copy">
						<h2>Amsterdam</h2>
						<span class="icon">
							<i class="glyphicon glyphicon-arrow-right"></i>
						</span>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-4 fh5co-item-wrap">
				<a class="fh5co-listing-item">
					<img src="images/img-5.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
					<div class="fh5co-listing-copy">
						<h2>Australia</h2>
						<span class="icon">
							<i class="glyphicon glyphicon-arrow-right"></i>
						</span>
=======

		<!-- button Modals, Untuk form modals tambah ada dibawah -->
		<button type="button" class="btn btn-success float-right mb-1" data-toggle="modal" data-target="#exampleModal">
			Tambah
		</button>
			<!-- Modal form tambah -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title text-center" id="exampleModalLabel">Input Informasi</h3>
					</div>
				<div class="modal-body">
					<form action="{{ route('saveTourism')}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
						<div class="mb-3">
							<label for="recipient-name" class="col-form-label">Judul Informasi:</label>
							<input type="text" class="form-control" id="judul" name="judul">
						</div>
						<div class="mb-3">
							<label for="recipient-name" class="col-form-label">Gambar 1:</label>
							<input type="file" class="form-control" id="photos" name="photos1">
						</div>
						<div class="mb-3">
							<label for="message-text" class="col-form-label">Deskripsi:</label>
							<textarea class="form-control" id="description" name="description"></textarea>
						</div>
				</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Submit</button>

>>>>>>> master
					</div>
				</form>
				</div>
			</div>
		</div>
		
		<div class="cls"></div>
		<div class="row">
		@foreach($dataTourism as $item)
			<div class="col-md-4 col-sm-4 fh5co-item-wrap">
				<a class="fh5co-listing-item">
<<<<<<< HEAD
					<img src="images/img-6.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
=======
					<img src="{{asset('imgTourism/'.$item->photos1_tourism)}}" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"
						class="img-responsive">
>>>>>>> master
					<div class="fh5co-listing-copy">
						<h2>{{ $item->judul }}</h2>
						<span class="icon">
							<i class="glyphicon glyphicon-chevron-right"></i>
						</span>
					</div>
				</a>
			</div>
			@endforeach
			<!-- END 3 row -->
		</div>
	</div>
</div>


<div class="fh5co-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 fh5co-news">
				<h3>News</h3>
				<ul>
					<li>
						<a href="#">
							<span class="fh5co-date">Sep. 10, 2016</span>
							<h3>Newly done Bridge of London</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus reprehenderit!</p>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="fh5co-date">Sep. 10, 2016</span>
							<h3>Newly done Bridge of London</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus reprehenderit!</p>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="fh5co-date">Sep. 10, 2016</span>
							<h3>Newly done Bridge of London</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus reprehenderit!</p>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-6 fh5co-testimonial">
				<img src="images/cover_bg_1.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive mb20">
				<img src="images/cover_bg_1.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
			</div>
		</div>
	</div>

</div>


@endsection