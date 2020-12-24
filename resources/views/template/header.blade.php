<div id="fh5co-header">
	<header id="fh5co-header-section">
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
						<li><a href="/about">About</a></li>
						<li><a href="/wisata">Wisata</a></li>
						<li><a href="/umkm">UMKM</a></li>
						<li>
							<a href="#" class="fh5co-sub-ddown sf-with-ul">
								Joko Fathur <small><i class="glyphicon glyphicon-chevron-down"></i></small>
							</a>
							<ul class="fh5co-sub-menu">
								<li><a href="left-sidebar.html">Web Development</a></li>
								<li><a href="right-sidebar.html">Branding &amp; Identity</a></li>
								<li>
									<a href="#" class="fh5co-sub-ddown">Free HTML5</a>
									<ul class="fh5co-sub-menu">
										<li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Build</a></li>
										<li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Work</a></li>
										<li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">Light</a></li>
										<li><a href="http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap" target="_blank">Relic</a></li>
										<li><a href="http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap" target="_blank">Display</a></li>
										<li><a href="http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap" target="_blank">Sprint</a></li>
									</ul>
								</li>
								<li><a href="#">UI Animation</a></li>
								<li><a href="#">Copywriting</a></li>
								<li><a href="#">Photography</a></li>
							</ul>
						</li>
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
							<a id="navbarDropdown" class="fh5co-sub-ddown sf-with-ul" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }}
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
	</header>

</div>