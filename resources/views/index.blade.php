<!DOCTYPE html>
<html class="sticky-header-reveal">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Etekana</title>	

		<meta name="keywords" content="e-tekana">
		<meta name="description" content="e-tekana">
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

 <script>
  $(document).ready(function(){
    $("#open").click(function(){
      $("#show").toggle();
    });
       });
  </script>
	<body>

		<div class="body">
		<header id="header" class="header-floating-bar" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'reveal', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 116, 'stickySetTop': '0px', 'stickyChangeLogo': false}">
				<div class="header-body bg-color-dark box-shadow-none">
					<div class="header-container header-container-height-sm container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="/">
											E-tekana
										</a>
									   <!-- <button type="button"  class="w-full block md:hidden lg:hidden" id="open">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="66" height="66" fill="currentColor" class="float-right bi bi-filter-right" viewBox="0 0 16 16">
                                        <path d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z"/>
                                        </svg>
                                       </button> -->
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end mr-lg-4">
								<div class="header-row">
									<div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-force-light-text header-nav-force-light-text-active-skin-color order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-mobile-dark header-nav-main-dropdown-no-borders header-nav-main-clone-items header-nav-main-slide header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="#">
															Amasomo
														</a>
														
														<ul class="dropdown-menu">
														    @foreach($courses as $course)
															<li><a class="dropdown-item" href="/detail/{{$course->id}}">{{$course->title}}</a></li>
															@endforeach
														</ul>
                                                      
													</li>

																							
													
													<li>
														<a class="nav-link" href="/contact">
															Twandikire
														</a>
													</li>
													<li>
													
										 @if (Route::has('login'))
                                          <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                            @auth
											 <li class="nav-item dropdown">
                                             <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                             {{ Auth::user()->name }}
                                              </a>

                                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                             <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                 {{ __('Logout') }}
                                              </a>

                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                               @csrf
                                              </form>
                                              </div>
                                             </li>
											   
                                         @else
                                               <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">In</a>

                                               @if (Route::has('register'))
                                               <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Iyandikishe</a>
                                               @endif
                                          @endauth
                                            </div>
                                        @endif
													</li>
												</ul>
										
											</nav>
										</div>
										<a class="btn btn-primary btn-join-now text-uppercase custom-font-weight-medium d-none d-lg-flex" href="{{ route('register') }}">Iyandikishe</a>
										
									</div>
								</div>
							</div>
						</div>
					</div>
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
									data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 50px;">Turwanye Ihohoterwa rishingiye ku gitsina ribera kuri interneti</h1>

								<div class="tp-caption font-weight-normal text-color-light text-uppercase tp-static-layer"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="0"
									data-start="800"
									data-startslide="0"
									data-endslide="99"
									data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 12px;">dutanga ubumenyi bwibanze k'umutekano wa digitale ku bakobwa</div>

							</div>
						</div>
					</div>
				</div>

				<section class="section section-center section-no-border section-light">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-10">
								<h2 class="font-weight-bold text-color-quaternary appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><span class="text-color-primary">Haguruka!</span> Urinde amakuru yawe  nibindi ukoresha kuri interineti</h2>
								<p class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="150"> Dukeneye kongera ubushishozi ndetse tukizera ko umutekano wibintu dukorera
									 kuri interneti umeze neza Cyane cyane muri iki gihe ikoreshwa rya interineti ryiyongereye cne.uko gukoresha interineti byiyongera niko abanyabyaha bo kuri interneti biyongera ndetse bakongera namayeri yo gukora ibyo byaha harimo nihohotera rishingiye ku gitsina.
									 Urubuga rwa etekana rero ruhari kubwawe ngo rugufashe kwihugura mubijyanye numutekano wa digitale.
                                </p>
								<a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium text-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300" href="#">Bikora bite?</a>
							</div>
						</div>
					</div>
				</section>
                <div id="home-intro" class="home-intro custom-home-intro bg-color-secondary m-0">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-8 mb-3 mb-lg-0">
                                <p class="text-color-light my-1">
                                   Hamwe na etekana twibanda ku ngingo eshatu mu masomo yumutekano wa digitale
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
                            <section class="parallax section section-parallax custom-parallax-bg-pos-left custom-sec-left h-100 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="image/safe.jpg" style="min-height: 315px;">
                                <!-- <img  src="{{asset('image/Capture.PNG')}}" alt /> -->
                            </section>
                        </div>
                        <div class="col-lg-6 p-0">
                            <section class="section section-no-border h-100 ">
                                <div class="row">
                                    <div class="col-half-section col-half-section-left">
                                        <h2 class="text-uppercase mt-2 font-weight-bold">Umutekano w'amakuru yawe(Data privacy)</h2>
                                        <p class="text-4 text-color-dark">Ese niki nkeneye kumenya kuri iyi ngingo?</p>
                                        <p class="custom-text-color-dark mb-4">hamwe naka gace turagufasha kumenya 
                                            ubuhanga bwibanze bwo kwirindira umutekano wa digitale mugihe urimo gukoresha enterineti cyane
                                            amakuru yawe bwite hamwe n'bikoresho bya digitale dukoresha tubika amakuru.
                                            nkurugero uburyo bwo kumenya niba link yatanzwe yizewe, gucunga ijambo ryibanga ryurubuga
                                            ninde wo gusangira amakuru yawe...   
	                             </p>
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
                                        <h2 class="text-uppercase mt-2 font-weight-bold">uko twakirinda ihohoterwa rishingiye ku gitsina kuri interneti</h2>
                                        <p class="text-4 text-color-dark">Niki kingenzi uzamenya muri iyi ngingo?</p>
                                        <p class="custom-text-color-dark mb-4">Hamwe n'iyi ngingo abakobwa bagiye kuvumbura ibintu byinshi bijyanye n'ihohoterwa rishingiye kugitsina hamwe nabundi bugizi bwa nabi bikorerwa kuri interneti bigira ingaruka kubagore nabakobwa muri societe yacu ,uko bikorwa nuburyo bwo kwirinda ibyo bitotezo </p>
                                    
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 p-0">
                            <section class="parallax section section-parallax h-100 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="image/mysafe.jpg" style="min-height: 315px;">
                            
                                <img class="p-4" src="{{asset('image/mysafe.jpg')}}" alt />
                            </section>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <section class="parallax section section-parallax custom-parallax-bg-pos-left custom-sec-left h-100 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="image/sosial.jpg" style="min-height: 315px;">
                                <img class="p-4" src="{{asset('image/sosial.jpg')}}" alt />
                            </section>
                        </div>
                        <div class="col-lg-6 p-0">
                            <section class="section section-no-border h-100 m-0">
                                <div class="row m-0">
                                    <div class="col-half-section col-half-section-left">
                                        <h2 class="text-uppercase mt-2 font-weight-bold"> umutekano W'imbuga Nkoranyambaga</h2>
                                        <p class="text-4 text-color-dark"> Kuki nkeneye kumenya ibyerekeye imbuga nkoranyambaga?</p>
                                        <p class="custom-text-color-dark mb-4">
										Imbuga nkoranyambaga zifasha abantu benshi gukora no gusangira ibitekerezo cyangwa kumenyana n'abantu batandukanye.
										hano rero turaguha ubuhanga bwukuntu ushobora kurinda konte mbuga nkoranyambaga kwinjirirwa nabahacker cyangwa izindi
                            tekinike abantu bakoresha mu ihohotera rikorewe kuri interneti .</p>
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
								<h2 class="font-weight-bold text-color-quaternary"> Ba umwiga ku rubuga </h2>
								<p>duhugura urubyiruko tukibanda cyane kubakobwa bashishikajwe numutekano wa digitale.
                                 unyuze mumiyoboro itandukanye nkuru rubuga, amahugurwa ya online byose k'ubuntu.
								 niba wifuza kuba umwe mubakurikirana amahugurwa yacu ushobora kwifatanya natwe mu mahugurwa aba rimwe mu cyumweru  kandi
                                  Ukaba wakiyandikisha hano kurubuga.</p>
								<a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium" href="#" title="join us">iyandikishe</a>
							</div>
							<div class="col-sm-8 col-lg-4 custom-sm-margin-1 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
								<img src="{{asset('img/demos/gym/icons/member-colored.png')}}" class="mb-2" alt />
								<h2 class="font-weight-bold text-color-quaternary">Bona ubufasha bwumutekano wa digitale</h2>
								<p>nkinshingano zacu kwirinda Ihohoterwa rishingiye kugitsina dufite umwanya umuntu wagize ikibazo
                         kijyanye numutekano wa digitale ashyirahoubundi agasubizwa nabandi uko babyumva we haba  kubikoresho cyangwa umutekano wa digitale. ushobora kutwandikira kubibazo byose,
                         natwe turi hano kugirango dufashe abantu bose bagizweho ingaruka n'ihohoterwa ribera kuri interineti kugirango tumufashe gushikama no kwitwararika.</p>
								<a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium" href="/" title="contact">twandikire</a>
							</div>
							<div class="col-sm-8 col-lg-4 custom-sm-margin-1 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
								<img src="{{asset('img/demos/gym/icons/group-fitness-colored.png')}}" class="mb-2" alt />
								<h2 class="font-weight-bold text-color-quaternary">ba umunyamwuga mu mutekano wa digitale</h2>
								<p>nyuma yo kurangiza amasomo yibanze yumutekano wa digital kandi ufite ubushake bwo kuba wakora mu mutekano
                                    mumutekano wa digitale tugufasha mu gufata amahugurwa yisumbuyeho ndetse tukanaguhuza nibigo bikeneye abakozi bumutekano wa digitale.</p>
							</div>
						</div>
					</div>
				</section>

				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-4 p-0">
							<section class="resources section-background custom-wide-section custom-small-section-padding-2 custom-overlay-style-2" style="background: url('img/demos/gym/carousels/resources.jpg'); background-size: cover;">
								<h2 class="text-color-light font-weight-bold">AMAKURU</h2>
								<div class="owl-carousel custom-dots-style-2 custom-dots-bottom-left-1" data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': false}">
									<div class="custom-resources-style">
										<span class="number bg-color-primary text-color-light">1</span>
										<span class="content">
											<span class="title text-color-light">
												Natangira nte
											</span>
											<p>biroroshye gutangira kwiga kurubuga rwacu ugomba kwiyandikisha ugatangira kwiga ndetse
                                                 ugahitamo nururimi ushaka.urashobora kandi kwitabira amahugurwa yacu ya online yo kwiga
                                            aho ukura demo nyinshi</p>
										</span>
									</div>
								</div>
							</section>
						</div>
						<div class="col-lg-4 p-0">
							<section class="working-hours section-background custom-wide-section custom-small-section-padding-2 custom-overlay-style-2" style="background: url('img/demos/gym/carousels/working-hour.jpg'); background-size: cover;">
								<h2 class="text-color-light font-weight-bold">Igihe twiga online</h2>
								<ul class="custom-list-style-1 pl-0">
									<li>
										<span class="custom-list-item custom-spacing-1 text-color-light custom-font-weight-medium">Kuwa kane</span>
										<span class="custom-list-value custom-text-color-1">: 6.00pm - 7.00pm</span>
									</li>
									<li>
										<span class="custom-list-item custom-spacing-1 text-color-light custom-font-weight-medium">Kuwa kane</span>
										<span class="custom-list-value custom-text-color-1">: 6.00pm - 7.00pm</span>
									</li>
									
								</ul>
							</section>
						</div>
						<div class="col-lg-4 p-0">
							<h1>Hindura ururimi</h1>
							<div id="google_translate_element"></div>
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
							<p>2021@Etekana <strong class="text-color-light font-weight-normal">Her digital Safety Matter </strong> Copyright All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</footer>
			
		</div>

		
		<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'kin'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

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
              new google.translate.TranslateElement({pageLanguage: 'kiny'}, 'google_translate_element');
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
