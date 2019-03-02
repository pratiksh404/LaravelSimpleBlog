@extends('layouts.app')
@section('content')
<h1>Posts</h1>
@if(count($posts)>0)
    @foreach($posts as $post)
        <div class="card">
               <div class="card-body">
                       <div class="row">
                    <div class="col-lg-4">
                                <img style="width: 100%;height:auto;" src="/storage/cover_images/{{$post->cover_image}}" alt="">             
                </div>
                <div class="col-lg-8">
                                <div class="">
                                                <a href="/posts/{{$post->id}}" style="text-decoration: none;">
                                                        <h3>{{$post->title}}</h3>
                                                <small>Written on {{$post->created_at->format('F d, Y')}} <br>
                                                        by <strong>{{$post->user['name']}}</strong>
                                                </small>
                                                        <hr>
                                                </a>
                       </div>        
                </div> 
                       </div>
                
                </div>
        </div>
        @endforeach
        {{$posts->links()}}
        @else
        <p>No Post Found</p>
        @endif
@endsection