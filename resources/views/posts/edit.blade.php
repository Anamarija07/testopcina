@extends('layouts.app')

@section('content')
    @include('inc.messages')
    <div class="myForm m-5">
        <h1 class="text-dark ms-5">Uredi novost</h1>
        {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group m-5">
                <h3>{{Form::label('title', 'Naslov')}}</h3>
                {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Unesi naslov'])}}
            </div>
            <div class="form-group m-5">
                <h3>{{Form::label('caption', 'Kratki opis')}}</h3>
                {{Form::textarea('caption', $post->caption, ['class' => 'form-control', 'placeholder' => 'Unesi kratki opis (max 2 rečenice)'])}}
            </div>
            <div class="form-group m-5">
                <h3>{{Form::label('body', 'Članak')}}</h3>
                {{Form::textarea('body', $post->body, ['id' => 'editor','class' => 'form-control', 'placeholder' => 'Unesi text'])}}
            </div>
            <div class="form-group ms-5">
                {{Form::file('cover_image')}}
            </div>
            <div class="form-group ms-5">
                <h3>Unesi datoteke</h3>
                {{Form::file('documents[]', ['id' => 'upload', 'multiple'])}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class'=>'btn btn-primary m-5'])}}
        {!! Form::close() !!} 
    </div>
@endsection

