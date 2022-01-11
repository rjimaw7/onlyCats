@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update',$post->id],'method' => 'POST','enctype' => 'multipart/form-data']) !!}
        <div class="form-group mb-1">
            {{Form::label('title','Title')}}
            {{Form::text('title',$post->title,['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Body')}}
            {{-- {{Form::textarea('body','',['class' => 'form-control', 'placeholder' => 'Caption'])}} --}}
            {{Form::textarea('body',$post->body, ['class' => 'ckeditor form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group mb-2 mt-2">
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        <br>
        {{Form::submit('Submit',['class' => 'btn btn-outline-dark btn-light'])}}
    {!! Form::close() !!}
@endsection