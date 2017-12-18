@extends('layouts.app')

@section('content')
 <div class="container">
   <header class="codrops-header row">
       
        <div class="p-2" >
        <i class="fa fa-area-chart btn-lg btn-dark hoverable px-4" aria-hidden="true"></i>
        </div>
                     <div class="m-2">
             <h3 class="animated fadeIn text-dark">- Mes expériences: </h3></div>
         <div class="ml-auto p-2" >
            
            <a href="{{route('admin')}}"><button type="button" class="btn btn-warning info-color my-2"><i class="fa fa-home" aria-hidden="true"></i> Home admin</button></a>
             <a href="{{route('portfolio')}}"><button type="button" class="btn btn-warning info-color my-2"> vue public</button></a>
        </div>
    </header>
  </div>
<section class="container">
                    <div class="row ">
                        <!--Section: tab admin-->
<section class="col-md-8 col-md-offset-2">
    
        <!--experiences-->
        <div class="col-md-12 info-color z-depth-4 border border-dark rounded mx-5">
            <div class="d-flex">
        <div class="m-2" >
        <a href="{{route('who_i_am')}}"><h3 class="animated fadeIn text-dark">www.test.com </h3></div></a>
         <div class="ml-auto p-2" >
            <a href="{{route('edit_experiences')}}"><button type="button" class="btn btn-warning warning-color my-2">Modifier</button> </a>
            <a href="{{route('who_i_am')}}"><button type="button" class="btn btn-danger my-2">Supprimer</button> </a>
            </div>
        
            </div> <!-- col md 12
 -->    
 <hr>

   
    <div class="row justify-content-center py-2">
        <a href="{{route('edit_experiences')}}"><button type="button" class="btn btn-warning info-color my-2"> Ajouter</button></a>
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
