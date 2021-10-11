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


			<div role="main" class="main">
				
				<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
					<div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.8">
						<ul>
							<li data-transition="fade">
								<img src="{{asset('image/ansgbv.jpg')}}"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									data-bgparallax="1" 
									class="rev-slidebg">
							</li>
							<li data-transition="fade">
								<img src="{{asset('image/sosial.jpg')}}"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									data-bgparallax="1" 
									class="rev-slidebg">
							</li>
						</ul>

						<div class="tp-static-layers">
							<h1 class="tp-caption font-weight-semibold text-color-light tp-static-layer"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="-50"
									data-start="800"
									data-startslide="0"
									data-endslide="99"
									data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 50px;">Let's end Online Gender Based Violence Now</h1>

								<div class="tp-caption font-weight-normal text-color-light text-uppercase tp-static-layer"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="0"
									data-start="800"
									data-startslide="0"
									data-endslide="99"
									data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 12px;">By empowering women with digital security skills </div>

							</div>
						</div>
					</div>
				</div>

				<section class="section section-center section-no-border section-light">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-10">
								<h2 class="font-weight-bold text-color-quaternary appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><span class="text-color-primary">Get Up!</span> Secure your digital information yourself</h2>
								<p class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="150"> We need to make attention on our safety especially in these time that technology is advancing ,the more the technology increase the more online criminals especially online GBV increase .so do you think that you need to know more about your online safety?
                                don't worry!!Etekana platform is here for your digital security career and guidance.
                                </p>
								<a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium text-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300" href="#">how it works</a>
							</div>
						</div>
					</div>
				</section>
                <div id="home-intro" class="home-intro custom-home-intro bg-color-secondary m-0">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-8 mb-3 mb-lg-0">
                                <p class="text-color-light my-1">
                                    we are  improving digital security skills in three main areas.
                                    
                                </p>
                            </div>
                            <div class="col-lg-4 text-left text-lg-right">
                                
                            </div>
                        </div>
                    </div>
                </div>        
            
                <!-- main areas -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <section class="parallax section section-parallax custom-parallax-bg-pos-left custom-sec-left h-100 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="img/demos/finance/parallax/parallax-1.jpg" style="min-height: 315px;">
                                <img  src="{{asset('image/Capture.PNG')}}" alt />
                            </section>
                        </div>
                        <div class="col-lg-6 p-0">
                            <section class="section section-no-border h-100 ">
                                <div class="row">
                                    <div class="col-half-section col-half-section-left">
                                        <h2 class="text-uppercase mt-2 font-weight-bold">online data privacy</h2>
                                        <p class="text-4 text-color-dark">what to know about this?</p>
                                        <p class="custom-text-color-dark mb-4">with this area we help you to know the
                                            basic skills to be protected  while connected to the Internet espacially 
                                            your personal information as well as the device that you are using.
                                            for instance how to know if the given link is trusted , site password management
                                            who to share your information...   
                                        </p>
                                        <a href="/" class="btn btn-outline btn-primary custom-btn-style-2 font-weight-semibold text-color-dark text-uppercase mt-2">Read More</a>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 p-0">
                            <section class="section section-no-border h-100 m-0">
                                <div class="row justify-content-end m-0">
                                    <div class="col-half-section col-half-section-right custom-text-align-right">
                                        <h2 class="text-uppercase mt-2 font-weight-bold">Device privacy</h2>
                                        <p class="text-4 text-color-dark">What you can expect from this area?</p>
                                        <p class="custom-text-color-dark mb-4">Device are very useful tools that we use while accessing internet 
                                            communicating with our friends,some people are being hacked by another people and they hear every single
                                            thing that you do on your phone this is so bad.
                                            saving our data offline so with this area we give u  skills that can help you
                                            to secure your data offline using device encryption if we say device we are including phones.</p>
                                        <a href="/" class="btn btn-outline btn-primary custom-btn-style-2 font-weight-semibold text-color-dark text-uppercase mt-2">Read More</a>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 p-0">
                            <section class="parallax section section-parallax h-100 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="img/demos/finance/parallax/parallax-2.jpg" style="min-height: 315px;">
                            
                                <img class="p-4" src="{{asset('image/mysafe.jpg')}}" alt />
                            </section>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <section class="parallax section section-parallax custom-parallax-bg-pos-left custom-sec-left h-100 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="img/demos/finance/parallax/parallax-3.jpg" style="min-height: 315px;">
                                <img class="p-4" src="{{asset('image/sosial.jpg')}}" alt />
                            </section>
                        </div>
                        <div class="col-lg-6 p-0">
                            <section class="section section-no-border h-100 m-0">
                                <div class="row m-0">
                                    <div class="col-half-section col-half-section-left">
                                        <h2 class="text-uppercase mt-2 font-weight-bold">Social media privacy</h2>
                                        <p class="text-4 text-color-dark"> what is in Social media privacy ?</p>
                                        <p class="custom-text-color-dark mb-4">
                                        as social media helps alot of people to to create and share content or to participate in social networking.
                                    so here we are giving you the skills of how you can protect your social media account against hacker or other 
                                people who want to use them in online harrasment .</p>
                                        <a href="/" class="btn btn-outline btn-primary custom-btn-style-2 font-weight-semibold text-color-dark text-uppercase mt-2">Read More</a>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>




				<section class="section section-center section-no-border section-light">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-sm-8 col-lg-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
								<img src="{{asset('image/demos/gym/icons/trainer-colored.png')}}" class="mb-2" alt />
								<h2 class="font-weight-bold text-color-quaternary"> Become a learner </h2>
								<p>we train youthand our priorities are women who are interested in digital security. 
                                 through different virtual channels like this platform,virtual events and so on for free.
                                if you wish to become one of our trainee you can join us on every week events and
                                 read the content found on this platform in courses section.</p>
								<a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium" href="/" title="join us">Register</a>
							</div>
							<div class="col-sm-8 col-lg-4 custom-sm-margin-1 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
								<img src="{{asset('img/demos/gym/icons/member-colored.png')}}" class="mb-2" alt />
								<h2 class="font-weight-bold text-color-quaternary">Get online security assistance</h2>
								<p>as our mission is to avoid online GBV we are always open to someone who had an issue 
                                    while setting his security` either device or online security you can contact us for any inquiries,
                         we are also here to help everyone who has been affected by online GBV to help her in being stable and behavior guidance .</p>
								<a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium" href="/" title="contact">contact us</a>
							</div>
							<div class="col-sm-8 col-lg-4 custom-sm-margin-1 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
								<img src="{{asset('img/demos/gym/icons/group-fitness-colored.png')}}" class="mb-2" alt />
								<h2 class="font-weight-bold text-color-quaternary">Build your digitech career</h2>
								<p>after completing the basic courses of ditital security and you have commitment in building your career 
                                    in digital security we connect you with the right programs that are going to make you an expert 
                                    so that you can start working in security industy  .</p>
								<a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium" href="/" title="Learn More">Learn More</a>
							</div>
						</div>
					</div>
				</section>

				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-4 p-0">
							<section class="resources section-background custom-wide-section custom-small-section-padding-2 custom-overlay-style-2" style="background: url('img/demos/gym/carousels/resources.jpg'); background-size: cover;">
								<h2 class="text-color-light font-weight-bold">Resources</h2>
								<div class="owl-carousel custom-dots-style-2 custom-dots-bottom-left-1" data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': false}">
									<div class="custom-resources-style">
										<span class="number bg-color-primary text-color-light">1</span>
										<span class="content">
											<span class="title text-color-light">
												How to get start
											</span>
											<p>it is easy to start learning on our platform you have to sign up and start your 
                                                course of preferance  and the language you want .you can also attend our weekly virtually learning session
                                            where you get more demos</p>
										</span>
									</div>
									<div class="custom-resources-style">
										<span class="number bg-color-primary text-color-light">2</span>
										<span class="content">
											<span class="title text-color-light">
												How to get start
											</span>
											<p>it is easy to start learning on our platform you have to sign up and start your 
                                                course of preferance  and the language you want .you can also attend our weekly virtually learning session
                                            where you get more demos</p>
										</span>
									</div>
									<div class="custom-resources-style">
										<span class="number bg-color-primary text-color-light">3</span>
										<span class="content">
											<span class="title text-color-light">
												How to get start
											</span>
											<p>it is easy to start learning on our platform you have to sign up and start your 
                                                course of preferance  and the language you want .you can also attend our weekly virtually learning session
                                            where you get more demos</p>
										</span>
									</div>
								</div>
							</section>
						</div>
						<div class="col-lg-4 p-0">
							<section class="working-hours section-background custom-wide-section custom-small-section-padding-2 custom-overlay-style-2" style="background: url('img/demos/gym/carousels/working-hour.jpg'); background-size: cover;">
								<h2 class="text-color-light font-weight-bold"> learning event</h2>
								<ul class="custom-list-style-1 pl-0">
									<li>
										<span class="custom-list-item custom-spacing-1 text-color-light custom-font-weight-medium">tuesday </span>
										<span class="custom-list-value custom-text-color-1">: 6.00pm - 8.00pm</span>
									</li>
									<li>
										<span class="custom-list-item custom-spacing-1 text-color-light custom-font-weight-medium">thursday</span>
										<span class="custom-list-value custom-text-color-1">: 6.00pm - 8.00pm</span>
									</li>
									
								</ul>
							</section>
						</div>
						<div class="col-lg-4 p-0">
							
						</div>
					</div>
				</div>

			</div>
			<!-- blog starting -->
			@foreach($blogs as $blog)
     <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match uk-margin-medium-top" data-uk-grid>
      <div>
        <div class="uk-card uk-card-small uk-card-default uk-card-hover uk-border-rounded-large uk-overflow-hidden">
          <div class="uk-card-media-top uk-inline uk-light">
            <img src="{{$blog->link}}" alt="Course Title">
            <div class="uk-position-cover uk-overlay-xlight"></div>
            <div class="uk-position-small uk-position-top-left">
              <span class="uk-label uk-text-bold uk-text-price">$27.00</span>
            </div>
            <div class="uk-position-small uk-position-top-right">
              <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative" data-uk-icon="heart"></a>
            </div>            
          </div>
          
          <div class="uk-card-body">
          
            <h3 class="uk-card-title uk-margin-small-bottom">{{$blog->title}}</h3>
            <div class="uk-text-muted uk-text-small">{{$blog->short_description}}</div>
            <div class="uk-text-muted uk-text-xxsmall uk-rating uk-margin-small-top">
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-margin-small-left uk-text-bold">5.0</span>
              <span>(324)</span>
            </div>
          </div>
          <a href="/details/{{$blog->id}}" class="uk-position-cover"></a>
        </div>
        @endforeach
            <br/>
            <br/>
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
