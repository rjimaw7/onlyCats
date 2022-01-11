@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group mb-1">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Body')}}
            {{-- {{Form::textarea('body','',['class' => 'form-control', 'placeholder' => 'Caption'])}} --}}
            {{Form::textarea('body','', ['class' => 'ckeditor form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <br>
        <div class="form-group mb-2">
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Submit',['class' => 'btn btn-outline-dark btn-light'])}}
    {!! Form::close() !!}
@endsection