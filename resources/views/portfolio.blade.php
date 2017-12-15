<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$title}} - {{ config('app.name') }}</title>
    <meta name="description" content="Perspective Page View Navigation: Transforms the page in 3D to reveal a menu" />
    <meta name="keywords" content="3d page, menu, navigation, mobile, perspective, css transform, web development, web design" />
	<meta name="author" content="Codrops" />
    <!-- Bootstrap core CSS -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
     <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{url('css/mdb.min.css')}}" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" type="text/css" href="{{url('css/normalize.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{url('css/demo.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{url('css/component.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/timeline.css')}}">
   <title>{{$title}} - {{ config('app.name') }}</title>
    <meta charset="utf-8">
    <script type="text/javascript" src="{{url('js/modernizr.custom.25376.js')}}"></script>
</head>
    <body>
  <div id="perspectivemenu" class="perspectivemenu effect-airbnb">
			<div class="containermenu">
				<div class="wrappermenu"><!-- wrapper needed for scroll -->
					<!-- Top Navigation -->
					
						<header class="codrops-header row">
					<p class="col-lg-2 col-md-2 col-xs-12 col-sm-12"><button class="btn-lg mx-1 waves-effect info-color-dark"  id="showMenu"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button></p>
					<h1 class="col-lg-10 col-md-10 col-xs-12 col-sm-12 font-effect-shadow-multiple" id="welcomeTitle">Bienvenue sur le Portfolio d'Aurélien Lecoq</span></h1>	
				</header>
				
                <div class="grid-container fluid">
				<section class="grid-x grid-margin-x grid-padding-x">
				     
					<div id="myTimeline" style="width: 100%; height: 600px;"></div>
  				
				</section>
  				</div><!-- fin container fluid -->
				<div class="spacesbetweendiv"></div>
							    
				</div><!-- wrapper -->
			<div class="spacesheader"></div>
			</div><!-- /container -->
		
<!-- lien de navigation -->
			<nav class="outer-nav left vertical">
				<a href="{{route('home')}}"><i class="fa fa-home" aria-hidden="true"> HOME</i></a>
				<a href="{{route('portfolio')}}"><i class="fa fa-picture-o" aria-hidden="true"> PORTFOLIO</i></a>
				<a href="{{route('contact')}}"><i class="fa fa-envelope-o" aria-hidden="true"> CONTACT</i></a>
			</nav>
		</div>

		</div><!-- /perspective -->
 <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{url('js/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{url('js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{url('js/mdb.min.js')}}"></script>
    <script src="{{url('js/modernizr.custom.25376.js')}}"></script>
    <script src="{{url('js/classie.js')}}"></script>
		<script src="{{url('js/menu.js')}}"></script>
<script src="{{url('js/timeline.js')}}"></script>
<script>
	timeline_data = 'data.json';//'https://docs.google.com/spreadsheets/d/1xuY4upIooEeszZ_lCmeNx24eSFWe0rHe9ZdqH2xqVNk/edit#gid=0';
	 window.timeline = new TL.Timeline('myTimeline', timeline_data);
</script>
    </body>
</html>


   