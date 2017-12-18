@extends('layouts.app')

@section('content')
 <div class="container">
   <header class="codrops-header row">
       
        <div class="p-2" >
        <i class="fa fa-area-chart btn-lg btn-dark hoverable px-4" aria-hidden="true"></i>
        </div>
                     <div class="m-2">
             <h3 class="animated fadeIn text-dark">- {{$title}}: </h3></div>
         <div class="ml-auto p-2" >
            
            <a href="{{route('admin')}}"><button type="button" class="btn btn-warning info-color my-2"><i class="fa fa-home" aria-hidden="true"></i> Home admin</button></a>
             <a href="{{route('portfolio')}}"><button type="button" class="btn btn-warning info-color my-2"> vue public</button></a>
        </div>
    </header>
  </div>

   

                    <div class="container">
                        <!--Section: tab admin-->
<section class="align-self-center">
    <div class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
       

<div class="info-color z-depth-4 border border-dark rounded p-4 mx-5">
    
             <div class="md-form col-auto ">
      <form class="form-horizontal bg-light py-4" method="POST" action="{{ route('techno_update') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
<fieldset>

<!-- Form Name -->
<legend>Mes Technologies</legend>

<!-- Text input-->
<div class="form-group">
  <div class="col-md-10">
  <input id="textinput" name="lab_tech" type="text" placeholder="Technologie" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group ">
  <div class="col-md-12 py-2"> 
    <input type="file" name="logo_tech" class="form-control-file" id="exampleFormControlFile1">
</div>
</div>

<button type="submit" class="btn btn-warning warning-color my-2">Modifier</button> 
</fieldset>


</form>
      
            </div>
            
</div>

    </div>
    <div class="col-sm">
    <div class="col-sm-12 info-color z-depth-4 border border-dark rounded mx-5">
    <form method="POST" enctype="multipart/form-data">
             <div class="md-form col-auto ">
      <div class="col-sm-auto" >
        <h6 class="animated fadeIn text-dark p-4">Mes Technos affichées</h6>
        <hr>
            </div>
        
    <div class="row">  
    <div class="p-0" >
        <h5 class="animated fadeIn text-dark p-4">Php</h5>
    </div>
        <div class="p-0" >
        <button type="button" class="btn-sm btn-danger danger-color my-4">Supprimer</button> 
        </div>      
         
    </div>
      <hr>
            </div>
    </div>
   
  </div> <!-- fin col-sm -->

      
        


                    
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


