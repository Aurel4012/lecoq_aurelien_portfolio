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

				<section class="container">
					<div class="row justify-content-center">

    					<!--Section: Contact v.2-->
<section class="section">

    <!--Section heading-->
    <h2 class="section-heading h1 custumTitle font-effect-shadow-multiple pt-4">Contactez moi</h2>
    <!--Section description-->
    <p class="section-description">Vous avez des questions? Contactez moi. Je vous répondrez le plus rapidement possible</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-12">
            @isset($messageflash)
   <div id="test" class="animated fadeOut alert alert-success" role="alert">
  {{$messageflash}}
</div>
@endisset
            <form id ="contact-form" name="contact-form" method="POST" action="{{ route('mail_send') }}">
                {{ csrf_field() }}
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <div class="md-form">
                            
                                <input type="text" id="name" name="name_mails" class="form-control">
                                <label for="name" class="">Votre prénom</label>
                                    @if ($errors->has('name_mails'))
                                     <h6 class="animated bounce infinite text-danger font-weight-bold ">Merci de renseigner votre prénom</h6>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->
                      <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <div class="md-form">
                                <input type="text" id="lastname" name="last_name_mails" class="form-control">
                                <label for="name" class="">Votre nom</label>
                                     @if ($errors->has('last_name_mails'))
                                     <h6 class="animated bounce infinite text-danger font-weight-bold ">Merci de renseigner votre nom</h6>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-12">
                        <div class="md-form">
                            <div class="md-form">
                                <input type="email" id="email" name="from_mails" class="form-control">
                                <label for="email" class="">Votre email</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                            <input type="text" id="subject" name="subject_mails" class="form-control">
                            <label for="subject" class="">Sujet</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message_mails" class="md-textarea"></textarea>
                            <label for="message">Votre message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <div class="center-on-small-only">
                <button class="btn btn-primary" type="submit">Ok</button>
                </div>
            
                </div>
            </form>

            
        

    </div>

</section>
<!--Section: Contact v.2-->

					</div>
				</section>

			
					
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
