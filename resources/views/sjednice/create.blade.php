@extends('layouts.app')
@section('content')
    @include('inc.messages')
    <div class="myForm m-5">
        <h1 class="text-dark m-5">Kreiraj Sjednicu općinskog vijeća</h1>
        {!! Form::open(['action' => 'App\Http\Controllers\SjednicaController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group m-5">
                <h3>{{Form::label('title', 'Naslov')}}</h3>
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Unesi naslov'])}}
            </div>
            <div class="form-group ms-5">
                {{Form::file('odluke[]',['id' => 'upload', 'multiple'])}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary m-5'])}}
        {!! Form::close() !!} 
    </div>
@endsection
