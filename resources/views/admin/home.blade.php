@extends('layouts.app')

@section('content')
@isset($messageflash)
   <div id="test" class="animated fadeOut alert alert-success" role="alert">
  {{$messageflash}}
</div>
@endisset

<section class="container">
                    <div class="row ">
                        <!--Section: tab admin-->
<section class="col-md-8 col-md-offset-2">
    
        <!--qui suis je-->
        <div class="col-md-12 info-color z-depth-4 border border-dark rounded mx-5">
            <div class="d-flex">
        <div class="p-2" >
        <a href="{{route('who_i_am')}}"><i class="fa fa-user btn-lg btn-dark hoverable px-4" aria-hidden="true"></i></a>
        </div>
        <div class="m-2" >
        <a href="{{route('who_i_am')}}"><h3 class="animated fadeIn text-dark">- Qui suis je? </h3></div></a>
         <div class="ml-auto p-2" >
            <a href="{{route('who_i_am')}}"><button type="button" class="btn btn-warning warning-color my-2">Modifier</button> </a>
        </div>
        
            </div> <!-- fin du row
 -->    
 <hr>

    <!--Etudes-->
            <div class="d-flex">
        <div class="p-2" >
        <a href="{{route('edit_studies')}}"><i class="fa fa-graduation-cap btn-lg btn-dark hoverable px-4" aria-hidden="true"></i></a>
        </div>
        <div class="m-2" >
        <a href="{{route('edit_studies')}}"><h3 class="animated fadeIn text-dark">- Mes études et formations: </h3></a>
        </div>
        <div class="ml-auto p-2" >
            <a href="{{route('edit_studies')}}"><button type="button" class="btn btn-warning warning-color my-2">Modifier</button></a>
        </div>
            </div><!-- fin du row
 -->       
        <hr> 
            <!--jobs-->
            <div class="d-flex">
        <div class="p-2" >
        <a href="{{route('edit_jobs')}}"><i class="fa fa-handshake-o btn-lg btn-dark hoverable px-4" aria-hidden="true"></i></a>
        </div>
        <div class="m-2" >
        <a href="{{route('edit_jobs')}}"><h3 class="animated fadeIn text-dark">- Mes emplois: </h3></a>
        </div>
        <div class="ml-auto p-2" >
            <a href="{{route('edit_jobs')}}"><button type="button" class="btn btn-warning warning-color my-2">Modifier</button></a>
        </div>
            </div><!-- fin du row
 -->       
        <hr> 
         <!--Experiences-->
             <div class="d-flex">
        <div class="p-2" >
        <a href="{{route('experiences')}}"><i class="fa fa-area-chart btn-lg btn-dark hoverable px-4" aria-hidden="true"></i></a>
        </div>
        <div class="m-2 " >
        <a href="{{route('experiences')}}"><h3 class="animated fadeIn text-dark">- Mes expériences: </h3>  </div></a>
        <div class="ml-auto p-2" >
             <a href="{{route('experiences')}}"><button type="button" class="btn btn-warning warning-color my-2">Modifier</button></a>
        </div>
            </div>
         <hr>

                <!--Technos-->
            <div class="d-flex">
        <div class="p-2" >
        <a href="{{route('techno')}}"><i class="fa fa-check btn-lg btn-dark hoverable px-4" aria-hidden="true"></i></a>
        </div>
        <div class="m-2" >
        <a href="{{route('techno')}}"><h3 class="animated fadeIn text-dark">- Technologies utilisées: </h3> </div></a>
        <div class="ml-auto p-2" >
             <a href="{{route('techno')}}"><button type="button" class="btn btn-warning warning-color my-2">Modifier</button></a> 
        </div>
            </div>
         <hr>
           <div class="d-flex">
        <div class="p-2" >
        <a href="{{route('social')}}"><i class="fa fa-share-square btn-lg btn-dark hoverable px-4" aria-hidden="true"></i></a>
        </div>
        <div class="m-2" >
        <a href="{{route('social')}}"><h3 class="animated fadeIn text-dark">- Réseaux Sociaux: </h3> </div> 
        <div class="ml-auto p-2" ></a>
            <a href="{{route('social')}}"> <button type="button" class="btn btn-warning warning-color my-2">Modifier</button> </a>
        </div>
            </div>
  <hr>
    <div class="row justify-content-center py-2">
        <a href="{{route('mail_list')}}"><i class="fa fa-envelope-o btn-lg btn-dark hoverable px-4 mx-4" aria-hidden="true"></i></a><a href="{{route('mail_list')}}"><h3 class="animated fadeIn text-dark my-2">Lire les mails</h3></a>
    </div>
        </div>
        

    </div>

</section>
<!--Section: tab admin-->

                    </div>
                </section>
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
@endsection
