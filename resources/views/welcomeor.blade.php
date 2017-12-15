<!DOCTYPE html>
<html>
<head>
    <!-- <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}"> -->
    <link href="https://fonts.googleapis.com/css?family=Rancho&effect=shadow-multiple" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('css/foundation.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/normalize.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{url('css/menu.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{url('css/component.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
   <title>{{$title}} - {{ config('app.name') }}</title>
    <meta charset="utf-8">
    <script type="text/javascript" src="{{url('js/modernizr.custom.25376.js')}}"></script>
</head>
    <body>
  <div id="perspective" class="perspective effect-airbnb">
			<div class="container">
				<div class="wrapper"><!-- wrapper needed for scroll -->
					<!-- Top Navigation -->
					
					<header class="grid-x">
						<div class="small-2 large-2 cell">
							<button id="showMenu">Menu</button>
						</div>
  					<div class="small-2 large-10 cell font-effect-shadow-multiple">
  						<h4 id="#titre">Bienvenue sur le portfolio d'Aurélien Lecoq</h4>
  				    </div>
					</header>
				
                <div class="grid-container fluid">
				<section class="grid-x grid-margin-x grid-padding-x">
				     
					 <div class="medium-4 large-3 cell  box1"><h6 class="soustitre">Qui suis je?</h6></div>
  					 <div class="medium-4 large-3 cell  box1"><h6 class="soustitre">Etudes:</h6></div>
  					 <div class="auto cell  box1"><h6 class="soustitre">Mes expériences:</h6></div>
  				
				</section>
  				</div><!-- fin container fluid -->
				<div class="spacesbetweendiv"></div>
				<div class="grid-container fluid ">
				
				<section class="grid-x grid-margin-x grid-padding-x">
				     
					 <div  class="medium-5 large-4 cell" id="boxmoreabout"><h6 class="soustitre">Encore plus à propos de moi, suivez moi!</h6></div>
  					 <div class="auto cell  box2">
  					 	<h6 class="soustitre">Les technologies utilisées:</h6>
  					 </div>
  					
  				
				</section>
			    </div> <!-- fin container fluid -->
			    
				</div><!-- wrapper -->
			<div class="spacesheader"></div>
			</div><!-- /container -->
			<nav class="outer-nav left vertical">
				<a href="{{route('home')}}" class="icon-home">Accueil</a>
				<a href="{{route('portfolio')}}" class="icon-image">Portfolio</a>
				<a href="{{route('contact')}}" class="icon-mail">Contact</a>
			</nav>

		</div><!-- /perspective -->
<script type="text/javascript" src="{{url('js/jquery-3.2.1.slim.min.js')}}"></script>
<script src="{{url('js/what-input.js')}}"></script>
<script src="{{url('js/foundation.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/click.js')}}"></script>
<script src="{{url('js/classie.js')}}"></script>
<script src="{{url('js/menu.js')}}"></script>
    </body>
</html>