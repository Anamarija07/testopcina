@extends('layouts.main')
    @section('content')
      <section class="five">
        <!--paginatin-->
      <nav class="navbar">
    </section>
      
      <section class="four">
        <!--paginatin-->
      <nav class="navbar">
    </section>
      <!--Posts-->
      <section class="three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <!-- Jumbotron-->
                        <section class="one">
                        <div class="jumbotron pt-5 mb-4 ">
                            <h1 class="display-2 d-inline" id="title">Obavijesti i javni pozivi</h1>
                            <p class="lead d-inline" id="naslov">Općine Kupres</p>
                            <hr class="my-4">    
                        </div>
                      </section>
                        <div class="card">
                            <img src={{ asset('/storage/cover_image/'.$obavijest->cover_image)}} alt="noimage.jpg" class="card-img-top">
                            <div class="card-body">
                              <h5 class="card-title">{{$obavijest->title}}</h5>
                              <small>{{$obavijest->created_at->format('d.m.Y.  H:m')}}</small><hr>
                              <p class="card-text">{!!$obavijest->body!!}</p>
                              @php $obavijest->documents = json_decode($obavijest->documents); @endphp
                              @foreach($obavijest->documents as $document)
                                <a class="btn m-2" role="button"
                                    href="{{ route('download', $document) }}" 
                                    download="{{ $document }}"><i
                                        class="bi bi-cloud-arrow-down"></i>
                                    ({{ $document }})
                                </a>
                              @endforeach
                              <a href="{{ url('/') }}" class="btn" id="btn-natrag">Natrag</a>
                              <!--user id = obavijest id--> 
                              @if(!Auth::guest())
                                @if(Auth::user()->id == $obavijest->user_id)
                                <a href="/opcinakupres1/public/obavijesti/{{$obavijest->id}}/edit" class="btn btn-info" id="btn-edit">Uredi</a>
                                  {!!Form::open(['action' => ['App\Http\Controllers\ObavijestController@destroy', $obavijest->id], 'method' => 'POST', 'class' => 'pull-right', 'id' => 'btn-danger'])!!}
                                      {{Form::hidden('_method','DELETE')}}
                                      {{Form::submit('Izbriši', ['class' => 'btn btn-danger ms-3 me-3', 'onclick' =>"return confirm('Jeste li sigurno da želite obrisati Novost?')"])}}
                                  {!!Form::close()!!}
                                @endif
                              @endif 
                             
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <!-- Jumbotron-->
                        <div class="jumbotron pt-5 mb-4 ">
                            <h1 class="display-6">Ostale obavijesti i javni pozivi</h1>
                            <hr>    
                        </div>
                        <div class="container">
                          @if(count($obavijesti)>0)
                          @foreach ($obavijesti as $obavijest)
                      <div class="card  mb-5">
                          <img src={{ asset('/storage/cover_image/'.$obavijest->cover_image)}} alt="noimage.jpg" class="card-img-top">
                          <div class="card-body">
                            <h5 class="card-title">{{$obavijest->title}}</h5>
                            <small>{{$obavijest->created_at->format('d.m.Y.  H:m')}}</small><hr>
                            <p class="card-text">{{$obavijest->caption}}</p>
                            <a href="/opcinakupres1/public/obavijesti/{{$obavijest->id}}" class="btn btn-primary"  id="btn-natrag">Pročitaj više</a>
                          </div>
                        </div>
                        @endforeach
                     
                      @else
                          <p>Rubrika "Obavijesti" je prazna</p>
                      @endif
                      </div>
                    </div>
        
      </section>
      







    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
 @endsection