<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
   <title>SecureNote</title>
      <meta charset="UTF-8">
      <meta name="application-name" content="evernote">
      <meta name="description" content="best note taking app">
      <meta name="keywords" content="notetaking,evernote">
      <meta name="author" content="veena shree">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            @import url('https://fonts.googleapis.com/css?family=Lato');
body
{
	font-family: 'Lato', sans-serif;
}
header {
	max-height: 130px;
}

.heading {
	padding: 0px;
	margin-top: 0px;
}

.home {
	margin-left: 71px;
}

.navbar-header.logo {
	margin-top: 30px;
}

ul.nav.navbar-nav {
	margin-top: 40px;
}

a:hover {
	color: #00a82d;
}

a {
	color: black;
	text-decoration: none;
	font-weight: bold;
}

.login-wrapper {
	
	margin-top: 46px;
}

.sign {
	
	color: green;
	margin-right: 15px;
	font-weight: 100;
	font-size: 16;
}
.log {
	
	color: green;
	margin-right: 18px;
	font-weight: 100;
	font-size: 16;
}
.btn-default {
	color: #333;
	background-color: #fff;
}

.log-btn {
	margin-right: 50px;
	margin-left: 20px;
	width: 121px;
	border: solid green 2px;
	color: green;
}

.bg-color {
	background-image: url("https://evernote.com/img/backgrounds/patterns/main-green.png");
	background-repeat: repeat;
}

.bg-color.green {
	background-color: #00a82d;
}

.content-wrapper {
	height: 618px;
}

.font {
	
	display: block;
	font-size: 56px;
	line-height: 72px;
	color: white;
}

.description {
	
	font-size: 24px;
	line-height: 40px;
	margin-bottom: 35px;
	color: white;
}

.arrange-content {
	padding-top: 128px;
}

.left-pad {
	padding-left: 65px;
}

.laptop {
	width: 91.7%;
}

.image {
	display: inline-block;
}

.design {
	color: green;
	width: 242px;
	height: 57px;
	font-weight: bold;
}

@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) {
	.font {
		font-family: 'Lato', sans-serif;
		display: block;
		font-size: 25px;
		line-height: 36px;
		color: white;
	}
	.laptop {
		display: none;
	}
}
        </style>
    </head>
    <body>
            <header>
         <nav class="navbar home">
            <div class="container-fluid">
               <div class="navbar-header logo" >
                  <img src="https://lh3.googleusercontent.com/-k6lq2mJFWAU/W6iyXfJ6EGI/AAAAAAAAACI/VP1FFXPhG5wEV3RXIPXtZE4_y5na6HzxQCL0BGAYYCw/h68/evernote%2Blogo.PNG" alt="logo" class="pull-left">
                  <a class="navbar-brand" href="#" >
                     <h2 class="heading"><b>SecureNote</b></h2>
                  </a>
               </div>
               <ul class="nav navbar-nav">
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">PLANS <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="#">BASIC</a></li>
                        <li><a href="#">BUSINESS</a></li>
                        <li><a href="#">PREMIUM</a></li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">FEATURES <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="#">WEB CLIPPER</a></li>
                        <li><a href="#">SPACES</a></li>
                        <li><a href="#">TEMPLATES</a></li>
                        <li><a href="#">INTEGRATIONS</a></li>
                     </ul>
                  </li>
                  <li><a href="#">HELP & LEARNING</a></li>
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">ABOUT US <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="#">ABOUT EVERNOTE</a></li>
                        <li><a href="#">PRESS</a></li>
                        <li><a href="#">INCLUSION & DIVERSITY</a></li>
                        <li><a href="#">CAREERS</a></li>
                        <li><a href="#">CONTACT US</a></li>
                     </ul>
                  </li>
               </ul> 
               @if (Route::has('login'))
               <div class="login-wrapper pull-right">
               @auth
                    <a href="{{ url('/home') }}">Home</a>
                    @else
                    @if (Route::has('register'))
                  <a class="sign" href="{{ route('register') }}">Sign up </a> 
                  @endif
                    @endauth
                  or

                  <a  href="{{ route('login') }}" class="log">Log  In</a>
                  
               </div>
               @endif 
            </div>
         </nav>
      </header>
      <div class="bg-color green ">
         <div class="container-fluid">
		 <div class="content-wrapper">
            <div class="row">
               <div class="col-md-6 col-lg-6">
                  <p >
                  <h1 class="font arrange-content left-pad">Feel organized <br/>without the effort</h1>
                  </p>
                  <p class="description left-pad"> Evernote helps you capture and prioritize ideas, projects, and to-do lists, so nothing falls through <br/>the cracks.</p>
				  <div class="left-pad">
                  <button type="button" class=" btn btn-default design ">SIGN UP FOR FREE</button>
				  </div>
               </div>
               <div class="col-md-6 col-lg-6 ">
                  <img src="https://evernote.com/c/assets/homepage/homepage-hero-desktop.png?6bc8c12ea3ddb214" class="hidden-xs hidden-sm laptop arrange-content" alt="evernote image" >
               </div>
            </div>
			</div>
         </div>
      </div>
           
    </body>
</html>
