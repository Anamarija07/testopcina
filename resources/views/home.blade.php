@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

      <!-- Jumbotron-->
        <section class="one">
            <div class="container">
                <div class="jumbotron">
                    <h1 class="display-4 d-inline">Odaberi radnju</h1>
                    <hr class="my-4">    
                </div>
            </div>
            </section>
            <!--Content-->
            <section class="two">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <a href="http://localhost/opcinakupres1/public/posts/create" class="btn" >
                                    <div class="card-body p-4">
                                        <h5 class="card-title">Objavi novost</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <a href="http://localhost/opcinakupres1/public/obavijesti/create" class="btn" >
                                    <div class="card-body p-4">
                                        <h5 class="card-title">Objavi obavijest</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <a href="http://localhost/opcinakupres1/public/sjednice/create" class="btn" >
                                    <div class="card-body p-4">
                                        <h5 class="card-title">Objavi sjednicu</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <a href="http://localhost/opcinakupres1/public/glasnici/create" class="btn" >
                                    <div class="card-body p-4">
                                        <h5 class="card-title">Objavi službeni glasnik</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
       <!--Content-->
       <section class="three">
           <div class="container position-relative float-center">
                <div class="row">
                    <div class="col-md-11">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                @if(count($posts) > 0)
                                <table class="table table-striped mt-5">
                                    <tr>
                                        <th>Naslov</th>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{$post->title}}</td>
                                            <td><a href="/opcinakupres1/public/posts/{{$post->id}}/edit" class="btn btn-secondary">Uredi</a></td>
                                            <td>{!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                                {{Form::hidden('_method','DELETE')}}
                                                {{Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick' =>"return confirm('Jeste li sigurno da želite obrisati Novost?')"])}}
                                             {!!Form::close()!!}</td>
                                        </tr>
                                    @endforeach
                                </table>  
                                @else
                                    <h4 class="mt-5">Nema kreirane novosti</h4> 
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
           </div>
       </section>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
