
<!DOCTYPE html>
<html lang="en-gb" dir="ltr">
<!--   19 Nov 2019 03:38:47 GMT -->
<!--  --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- / -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration</title>
  <link rel="shortcut icon" type="image/png" href="img/favicon.png" >
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('front/css/main.css')}}"/>
  <script src="{{ asset('front/js/uikit.js')}}"></script>
</head>
<header id="header">
	<div data-uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent ; top: #header">
	  

    <nav class="uk-navbar-container uk-letter-spacing-small uk-text-bold">
	    <div class="uk-container">
	      <div class="uk-position-z-index" data-uk-navbar>
	        <div class="uk-navbar-left">
	          <a class="uk-navbar-item uk-logo" href="#">e-tekana</a>
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
         
			
		</div>

		
		


	</body>
</html>
