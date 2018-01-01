@extends('layouts.app')

@section('content')
 <div class="container">
   <header class="codrops-header row">
       
        <div class="p-2" >
          <i class="fa fa-envelope-o btn-lg btn-dark hoverable px-4" aria-hidden="true"></i>
        </div>
                     <div class="m-2">
             <h3 class="animated fadeIn text-dark">- Lecture de mail: </h3></div>
         <div class="ml-auto p-2" >
            
            <a href="{{route('admin')}}"><button type="button" class="btn btn-warning info-color my-2"><i class="fa fa-home" aria-hidden="true"></i> Home admin</button></a>
        </div>
    </header>
  </div>
<section class="container">
                    <div class="row ">
     
                        <!--Section: tab mail-->
<section class="col-md-12">
     @foreach($mail as $mail)

        <div class="col-md-12 info-color z-depth-4 border border-dark rounded mx-5">
           <div class="col-md-1"><h5 class="text-dark font-weight-bold animated fadeIn">Mail de : </h5></div>
           <div class="col-md-2 text-dark"><input readonly class="form-control-plaintext text-dark py-2" id="from_mail" value="{{$mail->from_mails}}"></div>

           <div class="col-md-1"><h5 class="text-dark font-weight-bold animated fadeIn">Reçu le : </h5></div>
           <div class="col-md-2 text-dark"><input readonly class="form-control-plaintext text-dark py-2" id="created_at" value="{{$mail->created_at->format('d-m-Y à H:i')}}"></div>

           <div class="col-md-1"><h5 class="text-dark font-weight-bold animated fadeIn">Sujet : </h5></div>
           <div class="col-md-5 text-dark"><input readonly class="form-control-plaintext text-dark py-2" id="subject_mail" value="{{$mail->subject_mails}}"></div>


          <div class="col-md-6"><h5 class="text-dark font-weight-bold animated fadeIn">Message : </h5></div>
           <div class="col-md-12 text-dark"><input readonly class="form-control-plaintext text-dark py-2" id="subject_mail" value="{{$mail->message_mails}}"></div>
           <div class="col-md-12 text-dark"><a href="{{env('APP_URL')}}/admin/mail_del/{{$mail->id}}"><button type="button" class="btn btn-pink btn-sm waves-effect font-weight-bold">Supprimer</button></h5></a></div>
            </div>
            
          
            </div>

@endforeach
            </div> <!-- col md 12
 -->    

        </div>
        

    </div>

</section>

<!--Section: tab mail-->

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
