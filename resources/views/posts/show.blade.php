@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-dark">Go Back</a>
    <br>
    <br>
    <h1 class="">{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
    <div class="card p-3">
        <h5>{!! $post->body !!}</h5>
    </div>
    <hr>
    <small>Written on : {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user->id)
        <div class='d-flex justify-content-between'>
            <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>

        {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy',$post->id], 'method' => 'POST', 'class' => ''])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
        {!!Form::close() !!}
        </div>
        @endif
    @endif
@endsection