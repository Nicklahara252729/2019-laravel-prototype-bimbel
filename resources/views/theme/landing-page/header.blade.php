<header class="header menu_2">
		<div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
		<div id="logo">
			<a href="{{url('/')}}"><img src="img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
		</div>
		<ul id="top_menu">
			<li><a href="#0" class="search-overlay-menu-btn">Search</a></li>
			<li class="hidden_tablet"><a href="{{url('register')}}" class="btn_1 rounded">Pendaftaraan</a></li>
		</ul>
		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<nav id="menu" class="main-menu">
			<ul>
                <li><span><a href="{{url('/')}}">Home</a></span></li>
                <li><span><a href="{{url('tentang')}}">Tentang</a></span></li>
                <li><span><a href="{{url('paket-harga')}}">Paket Harga</a></span></li>
                <li><span><a href="{{url('testimoni')}}">Testimoni</a></span></li>
                <li><span><a href="{{url('blog')}}">Blog</a></span></li>
                <li><span><a href="{{url('tryout-online')}}">Tryout Online</a></span></li>
                <li><span><a href="{{url('login')}}">Log In</a></span></li>
			</ul>
		</nav>
		<!-- Search Menu -->
		<div class="search-overlay-menu">
			<form role="search" id="searchform" method="get">
				<input value="" name="q" type="search" placeholder="Search..." />
				<button type="submit"><i class="icon_search"></i>
				</button>
			</form>
		</div><!-- End Search Menu -->
	</header>
	<!-- /header -->