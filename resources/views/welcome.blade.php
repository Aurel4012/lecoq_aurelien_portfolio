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
    <link href="{{url('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div id="perspectivemenu" class="perspectivemenu effect-airbnb">
		<div class="containermenu">
			<div class="wrappermenu">
				<header class="codrops-header row">
                    <p class="col-lg-2 col-md-2 col-xs-12 col-sm-12"><button class="btn-lg mx-1 waves-effect info-color-dark"  id="showMenu"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button></p>
                    <h1 class="col-lg-10 col-md-10 col-xs-12 col-sm-12 font-effect-shadow-multiple" id="welcomeTitle">Bienvenue sur le Portfolio d'Aurélien Lecoq</span></h1>   
                </header>

    					<!--Section: Qui suis-je-->
<section class="container my-4">
                    <div class="row justify-content-center">

                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-6 mb-6">
                            <div class="card card-body">
                                <h4 class="card-title">Qui suis je?</h4>
                                @foreach ($woiam as $woiam)
                                 @endforeach
                                <p class="card-text"> {!!$woiam-> mypresentation !!}</p>
                               <!--la syntaxe cidessus permet d'interpreter le html-->
                            </div>
                        </div>
                    </div>
                </section>
                        <!--Section: Etudes et Jobs-->
<section class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 mt-6 mb-6">
                            <div class="card card-body">
                                <h4 class="card-title">Mes emplois: </h4>
                                 @foreach ($jobs as $jobs)
                                 <p>Etablissement: {{$jobs->etbt_job}}</p>
                                <p>titre: {{$jobs->titre_job}}.</p>
                                <p>Tâches effectuées: {!!$jobs->description_job!!}</p>
                                <p class="card-text">Période: du {{date('d/m/Y', strtotime($jobs->begin_date_job))}} au {{date('d/m/Y', strtotime($jobs->end_date_job))}}</p>
                                <hr>
                               @endforeach
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 mt-6 mb-6">
                            <div class="card card-body">
                                <h4 class="card-title">Etudes et formations:</h4>
                                     @foreach ($studies as $studies)
                                     <h5>Etablissement: {{$studies->org_stud}}</h5>
                                  <p class="card-text">{{$studies->description_stud}}</p>
                                  <p class="card-text">{{$studies->certif_stud}} {{date('d/m/Y', strtotime($studies->begin_date_stud))}} - {{date('d/m/Y', strtotime($studies->end_date_stud))}}</p>
                                 @endforeach
                            </div>
                        </div>

                    

                    </div>
                </section>
                <section class="container mt-5">
                    <div class="row justify-content-center">
                        <!-- reseau sociaux -->
                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 mt-3 mb-3">
                            <div class="card card-body">
                                <h4 class="card-title">Encore plus à propos de moi et suivez moi</h4>
                                 @foreach ($sn as $sn)
                                <p class="card-text "><a href="{{$sn->link_sn}}"><img src="uploads/sn/{{$sn->logo_sn}}" class="img-thumbnail" alt="Responsive image"></p></a>
                                 @endforeach
                            </div>
                        </div>

                        <!-- techno -->
                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 mt-3 mb-3">
                            <div class="card card-body">
                                <h4 class="card-title">Technologies utilisées:</h4>
                                @foreach ($techno as $techno)
                               <span class="d-inline"> <img src="uploads/tech/{{$techno->logo_tech}}" class="img-thumbnail w-25" alt="Responsive image">
                                @endforeach
                            </span>
                            </div>
                        </div>

                    </div>
                </section>
                       <footer class="row text-center">
                    <h5 class="col-lg-10 col-md-10 col-xs-12 col-sm-12 font-effect-shadow-multiple" id="welcomeTitle">© Aurélien Lecoq {{date("Y")}}</h5>   
                </footer> 
                </div><!-- wrapper -->
            </div><!-- /container -->
			
					
				</div><!-- wrapper -->
			</div><!-- /container -->
            <!-- lien de navigation -->
			<nav class="outer-nav left vertical">
				<a href="{{route('home')}}"><i class="fa fa-home" aria-hidden="true"> HOME</i></a>
				<a href="{{route('portfolio')}}"><i class="fa fa-picture-o" aria-hidden="true"> PORTFOLIO</i></a>
				<a href="{{route('contact')}}"><i class="fa fa-envelope-o" aria-hidden="true"> CONTACT</i></a>
			</nav>
		</div>

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
            
</body>

</html>
