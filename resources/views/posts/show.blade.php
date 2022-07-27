@extends('.layouts.main')
    @section('content')
      <!--Posts-->
      <section class="one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <!-- Jumbotron-->
                        <div class="jumbotron pt-5 mb-4 ">
                            <h1 class="display-2 d-inline" id="title">Novosti</h1>
                            <p class="lead d-inline" id="naslov">Općine Kupres</p>
                            <hr class="my-4">    
                        </div>
                    <div class="container">
                      @php $post->documents = json_decode($post->documents); @endphp
                        <div class="card">
                            <img src={{ asset('/storage/cover_image/'.$post->cover_image)}} alt="noimage.jpg" class="card-img-top">
                            <div class="card-body">
                              <h5 class="card-title">{{$post->title}}</h5>
                              <small>{{$post->created_at->format('d.m.Y.  H:m')}}</small><hr>
                              <p class="card-text">{!!$post->body!!}</p><hr>
                              
                             {{--ovo izmjeniti i cover u controlleru--}}
                              @foreach($post->documents as $document)
                                <a class="btn m-2" role="button"
                                    href="{{ route('download', $document) }}" 
                                   
                                    download="{{ $document }}"><i
                                        class="bi bi-cloud-arrow-down"></i>
                                    ({{ $document }})
                                </a>
                                @endforeach
                                <a href="{{ url('/#novosti') }}" class="btn btn-light mt-5" id="btn-natrag">Natrag</a>
                              <!--user id = post id-->
                              @if(!Auth::guest())
                                @if(Auth::user()->id == $post->user_id)
                                <a href="/opcinakupres1/public/posts/{{$post->id}}/edit" class="btn btn-info mt-5" id="btn-edit">Uredi</a>
                                  {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right', 'id'=> 'btn-danger'])!!}
                                      {{Form::hidden('_method','DELETE')}}
                                      {{Form::submit('Izbriši', ['class' => 'btn btn-danger ms-3 me-3 mt-5', 'onclick' =>"return confirm('Jeste li sigurno da želite obrisati Novost?')"])}}
                                  {!!Form::close()!!}
                                  
                                  @endif
                              @endif  
                            </div>
                          </div>
                    </div>
                  </div>
                    <div class="col-lg-4 col-12">
                        <!-- Jumbotron-->
                        <div class="jumbotron pt-5 mb-4 ">
                            <h1 class="display-6">Obavijesti i javni pozivi</h1>
                            <hr>    
                        </div>
                        <div class="container">
                          @if(count($obavijesti)>0)
                          @foreach ($obavijesti as $obavijest)
                      <div class="card  mb-5">
                          <img src={{ asset('/storage/cover_image/'.$obavijest->cover_image)}} alt="noimage.jpg" class="card-img-top">
                          <div class="card-body">
                            <h5 class="card-title">{{$obavijest->title}}</h5>
                            <small>{{$post->created_at->format('d.m.Y.  H:m')}}</small><hr>
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
                    </div>
                </div>
            </div>
        
      </section>
  
@endsection