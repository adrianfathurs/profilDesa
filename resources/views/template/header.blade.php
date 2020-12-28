<div id="fh5co-header">
	<nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar fixed-top" id="fh5co-header-section">
		<div class="container">
			<div class="nav-header">
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				<h1 id="fh5co-logo"><a href="/">Sambirejo</a></h1>
				<!-- START #fh5co-menu-wrap -->
				<nav id="fh5co-menu-wrap" role="navigation">
					<ul class="sf-menu" id="fh5co-primary-menu">
						<li>
							<a href="/">Home</a>
						</li>
						<li><a href="{{ route('tourism.index') }}">Wisata</a></li>
						<li><a href="/umkm">UMKM</a></li>
						<li><a href="/contact">Contact</a></li>
						@guest
						<li>
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
						@if (Route::has('register'))
						<li>
							<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
						</li>
						@endif
						@else
						<li>
							<a id="navbarDropdown" class="fh5co-sub-ddown sf-with-ul" href="#" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }} <small><i class="glyphicon glyphicon-chevron-down"></i></small>
							</a>
							<ul class="fh5co-sub-menu">
								<li>
									<a href="{{ route('logout') }}" onclick="event.preventDefault();
														                                                     document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
								</li>
							</ul>
						</li>
						@endguest
					</ul>
				</nav>
			</div>
		</div>
	</nav>

</div>