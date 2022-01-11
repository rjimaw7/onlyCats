@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <h1 class="text-center">Your Cat Collection</h1>
    <br>
    <div class="row">
        <div class=" mb-3">
            <a href="/posts/create" class="text-decoration-none btn btn-outline-dark">Create Post</a>
        </div>
        @if($posts->count() > 0)
            @if (is_array($posts) || is_object($posts))
            @foreach ($posts as $post)
                <div class="col-md-4 mb-4">
                    <a href="/posts/{{$post->id}}" class="text-decoration-none">
                        <img class="img-fluid" style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                    </a>
                </div>
            @endforeach
        @endif
        @else
            <h4 class="text-center">You have no posts</h4>
        @endif
    </div>
</div>
@endsection
