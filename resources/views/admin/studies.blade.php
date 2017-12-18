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
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
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
 <div class="container">
   <header class="codrops-header row">
       
        <div class="p-2" >
        <i class="fa fa-graduation-cap btn-lg btn-dark hoverable px-4" aria-hidden="true"></i>
        </div>
                     <div class="m-2">
             <h3 class="animated fadeIn text-dark">- Mes études: </h3></div>
         <div class="ml-auto p-2" >
            
            <a href="{{route('admin')}}"><button type="button" class="btn btn-warning info-color my-2"><i class="fa fa-home" aria-hidden="true"></i> Home admin</button></a>
        </div>
                </header>

                    <div class="container">
                        <!--Section: tab admin-->
<section class="align-self-center">
    <div class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
       

<div class="info-color z-depth-4 border border-dark rounded p-4 mx-5">
    
             <div class="md-form col-auto ">
      <form class="form-horizontal bg-light py-4" method="POST" action="{{ route('studies_update') }}">
         {{ csrf_field() }}
<fieldset>

<!-- Form Name -->
<legend>Mes études</legend>

<!-- Text input-->
<div class="form-group">
  <div class="col-md-12">
  <input id="textinput" name="certif_stud" type="text" placeholder="Diplômes" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group ">
  <div class="col-md-12">
  <input id="textinput" name="org_stud" type="text" placeholder="Etablissement" class="form-control input-md">
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <div class="col-md-12">                     
    <textarea class="form-control" id="textarea" name="description_stud" placeholder="description" style="height: 300px"></textarea>
  </div>
</div>
<!-- Date -->
<div class="form-group">
  <div class="col-md-12">
  <div class="row">
  <div class="col-md-6"> 
  <div class="col-md-12">    <label>Date de début</label>  </div>
   <div class="row">
   
    <div class="col-md-8"> <input class="my-4" type="date" name="begin_date_stud"> </div>
  </div>
</div>
 <div class="col-md-6"> 
  <div class="col-md-12">    <label>Date d'obtention</label>  </div>
   <div class="row">
   
    <div class="col-md-8"> <input class="my-4" type="date" name="end_date_stud"> </div>
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
        <h6 class="animated fadeIn text-dark p-4">Mes Diplômes affichés</h6>
        <hr>
            </div>
        
    <div class="row">  
    <div class="p-0" >
        <h5 class="animated fadeIn text-dark p-4">Bac</h5>
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
     </body>

</html>


