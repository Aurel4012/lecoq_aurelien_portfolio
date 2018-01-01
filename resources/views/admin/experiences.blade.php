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
<div class="container">
                    <div class="row ">
                        <!--Section: tab admin-->
<section class="col-md-8 col-md-offset-2">
    
        <!--experiences-->
        <div class="col-md-12 info-color z-depth-4 border border-dark rounded mx-5">
          
         <div class="row">
        <div class="col-md-12">
            @foreach($experiences as $experiences)
            <hr>
        <div class="col-md-8"><a href="{{env('APP_URL')}}/admin/edit_experiences/{{$experiences->id}}"><h3 class="animated fadeIn text-dark d-inline">{{$experiences->title_exp}} </h3></a>
         </div>
        
            <a href="{{env('APP_URL')}}/admin/edit_experiences/{{$experiences->id}}"><button type="button" class="btn btn-warning warning-color my-1">Modifier</button> </a>
             
            <a href="{{env('APP_URL')}}/admin/experiences_del/{{$experiences->id}}"><button type="button" class="btn btn-danger my-1">Supprimer</button> </a>
             <div>              
 
             @endforeach 
             <hr>
       </div>
        <a href="{{route('add_experiences')}}"><button type="button" class="btn btn-warning info-color my-2"> Ajouter</button></a>
        
        
   
    
        </div>
   </section>     


                    </div> <!-- fin de la row -->
                </div> <!-- fin container -->
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
