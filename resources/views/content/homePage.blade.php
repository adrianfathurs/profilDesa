@extends('template/header')
@section('content')
<!-- banner area -->
<div>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="{{asset('images/banner/b1.jpg')}}" alt="...">
				<div class="container">
					<!-- banner caption -->
					<div class="carousel-caption slide-one">
						<!-- heading -->
						<h2 class="animated fadeInLeftBig"> Melodi For You!</h2>
						<!-- paragraph -->
						<h3 class="animated fadeInRightBig">Find More Innovative &amp; Creative Music Albums.
						</h3>
						<!-- button -->
						<a href="#" class="animated fadeIn btn btn-theme">Download Here</a>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="{{asset('images/banner/b2.jpg')}}" alt="...">
				<div class="container">
					<!-- banner caption -->
					<div class="carousel-caption slide-two">
						<!-- heading -->
						<h2 class="animated fadeInLeftBig"> Listen It...</h2>
						<!-- paragraph -->
						<h3 class="animated fadeInRightBig">Lorem ipsum dolor sit amet, consectetur elit.</h3>
						<!-- button -->
						<a href="#" class="animated fadeIn btn btn-theme">Listen Now</a>
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
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-4 fh5co-item-wrap">
				<a class="fh5co-listing-item">
					<img src="images/img-6.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
					<div class="fh5co-listing-copy">
						<h2>Japan</h2>
						<span class="icon">
							<i class="glyphicon glyphicon-arrow-right"></i>
						</span>
					</div>
				</a>
			</div>
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