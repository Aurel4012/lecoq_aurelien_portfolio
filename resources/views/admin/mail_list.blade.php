@extends('layouts.app')

@section('content')
 <div class="container">
   <header class="codrops-header row">
       
        <div class="p-2" >
          <i class="fa fa-envelope-o btn-lg btn-dark hoverable px-4" aria-hidden="true"></i>
        </div>
                     <div class="m-2">
             <h3 class="animated fadeIn text-dark">- Liste des mails: </h3></div>
               @isset($messageflash)
   <div id="test" class="animated fadeOut alert alert-success" role="alert">
  {{$messageflash}}
</div>
@endisset
         <div class="ml-auto p-2" >
            
            <a href="{{route('admin')}}"><button type="button" class="btn btn-warning info-color my-2"><i class="fa fa-home" aria-hidden="true"></i> Home admin</button></a>
        </div>
    </header>
  </div>
<section class="container">
                    <div class="row ">
     
                        <!--Section: tab mail-->
<section class="col-md-12">
    
        <!--qui suis je-->
        <div class="col-md-12 info-color z-depth-4 border border-dark rounded mx-5">
            <table class="table border border-dark">
  <thead>
    <tr>
      <th scope="col" class="border-dark"><h5 class="text-dark font-weight-bold">De:</h5></th>
      <th scope="col" class="border-dark"><h5 class="text-dark font-weight-bold">Prenom:</h5></th>
      <th scope="col" class="border-dark"><h5 class="text-dark font-weight-bold">Nom:</h5></th>
      <th scope="col" class="border-dark"><h5 class="text-dark font-weight-bold">Sujet</h5></th>
      <th scope="col" class="border-dark"><h5 class="text-dark font-weight-bold">Date</h5></th>
      <th scope="col" class="border-dark"><h5 class="text-dark font-weight-bold">Supprimer</h5></th>
      <th scope="col" class="border-dark"><h5 class="text-dark font-weight-bold">Voir</h5></th>
    </tr>
  </thead>
  <tbody>
     @foreach($maillist as $maillist)
    <tr>
      <th scope="row" class="border-dark"><h5 class="text-dark font-weight-bold">{{$maillist->from_mails}}</h5></th>
      <td class="border-dark"><h5 class="text-dark font-weight-bold">{{$maillist->name_mails}}</h5></td>
      <td class="border-dark"><h5 class="text-dark font-weight-bold">{{$maillist->last_name_mails}}</h5></td>
      <td class="border-dark"><h5 class="text-dark font-weight-bold">{{$maillist->subject_mails}}</h5></td>
      <td class="border-dark"><h5 class="text-dark font-weight-bold">{{$maillist->created_at->format('d-m-Y à H:i')}}</h5></td>
      <td class="border-dark"><h5 class="text-dark font-weight-bold"><a href="{{env('APP_URL')}}/admin/mail_del/{{$maillist->id}}"><button type="button" class="btn btn-pink btn-sm waves-effect font-weight-bold">Supprimer</button></h5></a></td>
      <td class="border-dark"><h5 class="text-dark font-weight-bold"><a href="{{env('APP_URL')}}/admin/mail_read/{{$maillist->id}}"><button type="button" class="btn btn-light-blue btn-sm waves-effect font-weight-bold">Voir</button></h5></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
            </div>
        
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
