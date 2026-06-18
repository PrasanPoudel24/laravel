<!DOCTYPE html>
<!-- ImmiEx - Immigration and Visa Consulting Website Template design by Jthemes -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">




	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="Jthemes"/>	
		<meta name="description" content="ImmiEx - Immigration and Visa Consulting Website Template"/>
		<meta name="keywords" content="Responsive, Jthemes, One Page, Landing, Business, Coaching, Consulting, Creative, Immigration, Visa">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				
  		<!-- SITE TITLE -->
		<title>ImmiEx - Immigration and Visa Consulting Website Template</title>
							
		<!-- FAVICON AND TOUCH ICONS  -->
		<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
		<link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="icon" href="apple-touch-icon.png" type="image/x-icon">

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"> 	
		<link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800,900&display=swap" rel="stylesheet">

		<!-- BOOTSTRAP CSS -->
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
				
		<!-- FONT ICONS -->
		<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet" crossorigin="anonymous">
		<link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="{{ asset('css/menu.css') }}" rel="stylesheet">
		<link id="effect" href="{{ asset('css/dropdown-effects/fade-down.css') }}" media="all" rel="stylesheet">
		<link href="{{ asset('css/tweenmax.css') }}" rel="stylesheet"> 	
		<link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet"> 	
		<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
	
		<!-- TEMPLATE CSS -->
	    <!-- <link href="{{ asset('css/aqua.css') }}" rel="stylesheet">    --> 
	    <!-- <link href="{{ asset('css/blue.css') }}" rel="stylesheet">    --> 
	    <!-- <link href="{{ asset('css/darkred.css') }}" rel="stylesheet"> --> 
	    <!-- <link href="{{ asset('css/green.css') }}" rel="stylesheet">   --> 
	    <!-- <link href="{{ asset('css/olive.css') }}" rel="stylesheet">   -->
	    <link href="{{ asset('css/red.css') }}" rel="stylesheet">
	    <!-- <link href="{{asset('orange.css')}} rel="stylesheet">  -->
	    <!-- <link href="{{asset('salmon.css')}} rel="stylesheet">  -->
	    <!-- <link href="{{asset('teal.css')}} rel="stylesheet">    -->
	    <!-- <link href="{{asset('yellow.css')}} rel="stylesheet">  -->
		
		<!-- RESPONSIVE CSS -->
		<link href="{{ asset('css/responsive.css') }}" rel="stylesheet"> 
		
	</head>




	<body>




		<!-- PRELOADER SPINNER
		============================================= -->		
		<div id="loader-wrapper">
			<div id="loader"><div class="cssload-box-loading"></div></div>
		</div>

	@include('layout.header')
	@yield('body')
	@include('layout.footer')
	





		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>	
		<script src="{{asset('js/modernizr.custom.js')}}"></script>
		<script src="{{asset('js/jquery.easing.js')}}"></script>
		<script src="{{asset('js/jquery.appear.js')}}"></script>
		<script src="{{asset('js/jquery.stellar.min.js')}}"></script>	
		<script src="{{asset('js/menu.js')}}"></script>
		<script src="{{asset('js/materialize.js')}}"></script>	
		<script src="{{asset('js/jquery.scrollto.js')}}"></script>
		<script src="{{asset('js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
		<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
		<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>	
		<script src="{{asset('js/hero-request-form.js')}}"></script>
		<script src="{{asset('js/hero-register-form.js')}}"></script>
		<script src="{{asset('js/request-form.js')}}"></script>	
		<script src="{{asset('js/contact-form.js')}}"></script>
		<script src="{{asset('js/comment-form.js')}}"></script>
		<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>	
		<script src="{{asset('js/jquery.validate.min.js')}}"></script>	

		<!-- Custom Script -->		
		<script src="{{asset('js/custom.js')}}"></script>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!-- [if lt IE 9]>
			<script src="{{asset('js/html5shiv.js')}}" type="text/javascript"></script>
			<script src="{{asset('js/respond.min.js')}}" type="text/javascript"></script>
		<![endif] -->

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->	
		<!--
		<script>
			window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
			ga('create', 'UA-XXXXX-Y', 'auto');
			ga('send', 'pageview');
		</script>
		<script async src='https://www.google-analytics.com/analytics.js'></script>
		-->
		<!-- End Google Analytics -->
		


	</body>



</html>