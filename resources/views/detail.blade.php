
<!DOCTYPE html>
<html lang="en-gb" dir="ltr">


<!--   19 Nov 2019 03:38:47 GMT -->
<!--  --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- / -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{$course->title}}</title>
  <link rel="shortcut icon" type="image/png" href="img/favicon.png" >
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700&amp,display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('front/css/main.css')}}"/>
  <script src="{{ asset('front/js/uikit.js')}}"></script>
</head>

<body class="uk-background-body">

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
<!-- end of header -->
<div class="uk-section uk-margin-top">
 
  
  <!-- content starting -->
 <header id="header">
	<div class="uk-container uk-container-large">
		<div class="uk-box-shadow-small uk-overflow-hidden uk-border-rounded uk-inline uk-background-center-center 
		uk-background-cover uk-background-norepeat uk-background-blend-overlay uk-overlay-blend" 
		style="background-image: url('{{asset('image/mysafe.jpg')}}');">
			<div class="uk-padding-large">
				<div data-uk-grid>
					<div class="uk-width-expand@m uk-flex uk-flex-middle uk-light">
						<div>
							<a class="uk-text-demi-bold hvr-back" href="/"><span class="uk-margin-small-right" 
								data-uk-icon="icon: arrow-left; ratio: 1.4"></span>Back</a>
							<h1 class="uk-heading-small uk-letter-spacing-medium">{{$course->title}}</h1>
							<p class="uk-margin-small-bottom">{{$course->description}}</p>
							<div class="uk-rating">
								<span class="uk-rating-filled" data-uk-icon="icon: star"></span>
								<span class="uk-rating-filled" data-uk-icon="icon: star"></span>
								<span class="uk-rating-filled" data-uk-icon="icon: star"></span>
								<span class="uk-rating-filled" data-uk-icon="icon: star"></span>
								<span data-uk-icon="icon: star"></span>
								<span class="uk-margin-small-left">4.0</span>
								<span>(6,650)</span>
								<span class="uk-margin-left">65,306 students enrolled</span>
							</div>
							<p class="uk-margin-xsmall-top">Created by Tom Solender<span class="uk-margin-left">Last updated</span>
								<time datetime="2020-07-07">{{$course->created_at}}</time></p>
						</div>
					</div>
					<div class="uk-width-1-5@m"></div>
					<div class="uk-width-1-3@m uk-flex uk-flex-middle">
						<div class="uk-inline uk-light uk-border-rounded-large uk-box-shadow-small uk-overflow-hidden">
							<img src="{{asset('image/ogbv.png')}}" alt="Video">
							<div class="uk-position-center">
								<a href="#course-video" class="uk-icon-link" data-uk-icon="icon: play-circle; ratio: 3" data-uk-toggle></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
<div id="course-video" class="uk-flex-top" data-uk-modal>
	<div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
		<button class="uk-modal-close-outside" type="button" data-uk-close></button>
		<iframe src="https://player.vimeo.com/video/126241629" width="1000" height="562" data-uk-video></iframe>
	</div>
</div>

 <br/>
 <br/>
  <div class="uk-container">
    <div class="uk-grid-large" data-uk-grid>
      <div class="uk-width-expand@m">
        <div class="uk-article">
          <h3>Description</h3>
          <p>{{$course->content}}</p>
       

          <h3>Course content</h3>
          <ul class="uk-margin-top" data-uk-accordion="multiple: true">
		  @foreach($topics as $topic)  
            <li class="uk-open">
              <a class="uk-accordion-title" href="#">{{$topic->name}}<span class="uk-align-right uk-margin-remove-bottom">28:56</span></a>
              <div class="uk-accordion-content">
                <table class="uk-table uk-table-justify uk-table-middle uk-table-divider">
                  <tbody>
                    <tr class="uk-text-primary">
					@foreach($subtitles as $subtitle)   	
                      <td class="uk-table-expand"><span class="uk-margin-small-right" data-uk-icon="play-circle"></span><a href="{{$subtitle->link}}" data-uk-toggle>{{$topic->subtopicone}}</a></td>
                      <td><span data-uk-icon="unlock"></span></td>
                      <td class="uk-table-shrink">04:24</td>
					@endforeach
                    </tr>                
                  </tbody>
                </table>
              </div>
            </li>
		  @endforeach
          </ul>

         
    </div>
  </div>
  </div>
 </div>
 </div>
<!-- footer -->
<footer class="uk-section uk-section-secondary uk-section-large">
	<div class="uk-container uk-text-muted">
		<div class="uk-child-width-1-2@s uk-child-width-1-5@m" data-uk-grid>
			<div>
				<h5>my e-safety</h5>
				
			</div>
			<div>
				<h5>Community</h5>
				<ul class="uk-list uk-text-small">
					<li><a class="uk-link-muted" href="#">events</a></li>
					<li><a class="uk-link-muted" href="#">learners</a></li>
					<li><a class="uk-link-muted" href="#">Platforms</a></li>
					<li><a class="uk-link-muted" href="#">Workshops</a></li>
					<li><a class="uk-link-muted" href="#">Local Meetups</a></li>
				</ul>
			</div>
			<div>
				<h5>Join Us</h5>
				<ul class="uk-list uk-text-small">
					<li><a class="uk-link-muted" href="#">Our Initiatives</a></li>
					<li><a class="uk-link-muted" href="#">Giving Back</a></li>
					<li><a class="uk-link-muted" href="#">Communities</a></li>
					<li><a class="uk-link-muted" href="#">Youth Program</a></li>
					<li><a class="uk-link-muted" href="#">Charity</a></li>
				</ul>
			</div>
			<div>
				<h5>Contact</h5>
				<ul class="uk-list uk-text-small">
					<li><a class="uk-link-muted" href="#">Contact Form</a></li>
					<li><a class="uk-link-muted" href="#">LinkedIn</a></li>
					<li><a class="uk-link-muted" href="#">Facebook</a></li>
					<li><a class="uk-link-muted" href="#">Instagram</a></li>
					<li><a class="uk-link-muted" href="#">Visit Us</a></li>
				</ul>
			</div>
			<div>
				<div class="uk-margin">
					<a href="#" class="uk-logo">E-tekana</a>
				</div>
				<div class="uk-margin uk-text-small">				
					<p><a href="templateshub.net">your digital security partner</a></p>
				</div>
				<div class="uk-margin">
					<div data-uk-grid class="uk-child-width-auto uk-grid-small">
						<div class="uk-first-column">
							<a href="https://www.facebook.com/" data-uk-icon="icon: facebook" class="uk-icon-link uk-icon"
								target="_blank"></a>
						</div>
						<div>
							<a href="https://www.instagram.com/" data-uk-icon="icon: instagram" class="uk-icon-link uk-icon"
								target="_blank"></a>
						</div>
						<div>
							<a href="mailto:info@blacompany.com" data-uk-icon="icon: mail" class="uk-icon-link uk-icon"
								target="_blank"></a>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
</footer>
</body>
</html>
