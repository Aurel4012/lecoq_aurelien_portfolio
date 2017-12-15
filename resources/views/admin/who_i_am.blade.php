@extends('layouts.app')

@section('content')
 <div class="container">
   <header class="codrops-header row">
       
        <div class="p-2" >
        <i class="fa fa-user btn-lg btn-dark hoverable px-4" aria-hidden="true"></i>
        </div>
                     <div class="m-2">
             <h3 class="animated fadeIn text-dark">- Qui suis je? </h3></div>
         <div class="ml-auto p-2" >
            
            <a href="{{route('admin')}}"><button type="button" class="btn btn-warning info-color my-2"><i class="fa fa-home" aria-hidden="true"></i> Home admin</button></a>
        </div>
                </header>

                    <div class="d-flex justify-content-center">
                        <!--Section: tab admin-->
<section class="align-self-center">
    
        <!--qui suis je-->
<form method="POST" enctype="multipart/form-data">
<div class="col-lg-12 info-color z-depth-4 border border-dark rounded mx-5">
             <div class="md-form col-lg-12 ">
      <div class="p-2" >
        <h6 class="animated fadeIn text-dark p-4">Edition de qui suis je?</h6>
            </div>
        
        
        <div class="p-2" >
       
        <i class="fa fa-pencil prefix animated fadeIn text-dark"></i>
        <textarea id="mytextarea" name="mytextarea" class="md-textarea ph-100 my-4 p-4" style="height: 300px"></textarea>
        
    </div>
      <button type="submit" class="btn btn-warning warning-color my-2">Modifier</button> 
        
           


        </div>
    
        
</div>
</form>
        


                    
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
    <script type="text/javascript" src="{{url('js/tinymce/tinymce.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/tinymce/edit.js')}}"></script>
@endsection


