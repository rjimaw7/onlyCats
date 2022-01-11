@extends('layouts.app')

@section('content')
                <div class=" mb-3">
                    <a href="/posts/create" class="text-decoration-none btn btn-outline-dark">Create Post</a>
                </div>
    @if(count($posts) > 0)
        @foreach($posts as $post)
             <div class="card p-3 mb-3">
                 <div class="row">
                     <div class="col-md-4 col-sm-4">
                        <img style="width:100%" class="img-fluid" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                     </div>
                     <div class="col-md-8 col-sm-8">
                        <h3 class=""> <a href="/posts/{{$post->id}}" class="text-decoration-none">{{$post->title}}</a></h3>
                        <small>Written on : {{$post->created_at}} by {{$post->user->name}}</small>
                     </div>
                 </div>
             </div>
        @endforeach
        <br>
        {{-- <div>{{$posts->links()}}</div> --}}
    @else
        <p>No posts found</p>
    @endif
@endsection