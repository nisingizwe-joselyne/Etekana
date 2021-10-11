<!DOCTYPE html>
<html class="sticky-header-reveal">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>my e-safety platform</title>	

		<meta name="keywords" content="my e-safet" />
		<meta name="description" content="my e-safet platform">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css')}}">
         <!-- for navbar -->
		 <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700&amp,display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('front/css/main.css')}}"/>
  
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/animate/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/magnific-popup/magnific-popup.min.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{asset('css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{asset('css/theme-shop.css')}}">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/settings.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/layers.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/navigation.css')}}">
		
		<!-- Demo CSS -->
		<link rel="stylesheet" href="{{asset('css/demos/demo-gym.css')}}">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('css/skins/skin-gym.css')}}"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('vendor/modernizr/modernizr.min.js')}}"></script>
		<!-- navbar -->
        <script src="{{ asset('front/js/uikit.js')}}"></script>
	</head>
	<body>

		<div class="body">
        <header id="header">
	<div data-uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent ; top: #header">
	  

    <nav class="uk-navbar-container uk-letter-spacing-small uk-text-bold">
	    <div class="uk-container">
	      <div class="uk-position-z-index" data-uk-navbar>
	        <div class="uk-navbar-left">
	          <a class="uk-navbar-item uk-logo" href="/">e-tekana</a>
	        </div>
	        <div class="uk-navbar-right">
	          <ul class="uk-navbar-nav uk-visible@m" data-uk-scrollspy-nav="closest: li; scroll: true; offset: 80">
	            <li class="{{Request::is('/')? 'uk-actve': ' '}}"><a href="/">Home</a></li>
	            <li class="{{Request::is('/')? 'uk-actve': ' '}}">
                <a href="/">Events</a>
                </li>
	            <li >
	              <a href="#">Courses</a>
	              <div class="uk-navbar-dropdown">
	                <ul class="uk-nav uk-navbar-dropdown-nav">
	                  <li ><a href="#">Course</a></li>
	                  <li ><a href="#">Event</a></li>
	                  <li ><a href="#">Search</a></li>
	                  <li ><a href="/login">Sign In</a></li>
	                  <li ><a href="/registration">Sign Up</a></li>
	                </ul>
	              </div>            
	            </li>
	          </ul>
	          <div>
	            <a class="uk-navbar-toggle" data-uk-search-icon href="#"></a>
	            <div class="uk-drop uk-background-default" data-uk-drop="mode: click; pos: left-center; offset: 0">
	              <form class="uk-search uk-search-navbar uk-width-1-1">
	                <input class="uk-search-input uk-text-demi-bold" type="search" placeholder="Search..." autofocus>
	              </form>
	            </div>
	          </div>

	          <div class="uk-navbar-item">
	            <div><a class="uk-button uk-button-primary-light" href="/registration">Sign Up</a></div>
	          </div>          
	          <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" data-uk-toggle><span
	            data-uk-navbar-toggle-icon></span></a>
	        </div>
	      </div>
	    </div>
	  </nav>
	</div>

 </header>	


            <!-- end navbar -->
            @yield('content')
  
            
            <!-- footer -->
         
			
			<footer id="footer" class="bg-color-quaternary">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<ul class="social-icons custom-social-icons">
								<li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-googleplus"><a href="http://www.google.com/" target="_blank" title="Google Plus"><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-lg-12 text-center">
							<p>2021@my e-safety <strong class="text-color-light font-weight-normal">your digital security partner</strong> Copyright All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</footer>
			
		</div>

		<!-- Vendor -->
		<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.appear/jquery.appear.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
		<script src="{{asset('vendor/popper/umd/popper.min.js')}}"></script>
		<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('vendor/common/common.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.validation/jquery.validate.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
		<script src="{{asset('vendor/isotope/jquery.isotope.min.js')}}"></script>
		<script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
		<script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('vendor/vide/jquery.vide.min.js')}}"></script>
		<script src="{{asset('vendor/vivus/vivus.min.js')}}"></script>
		<script src="{{asset('vendor/instafeed/instafeed.min.js')}}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('js/theme.js')}}"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="{{asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
		<script src="{{asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{asset('js/views/view.contact.js')}}"></script>

		<!-- Demo -->
		<script src="{{asset('js/demos/demo-gym.js')}}"></script>
		
		<!-- Theme Custom -->
		<script src="{{asset('js/custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{asset('js/theme.init.js')}}"></script>


		  <script type="text/javascript">
            function googleTranslateElementInit() {
              new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
            </script>
            
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
            </script>
			
			

		

		

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->


	</body>
</html>
