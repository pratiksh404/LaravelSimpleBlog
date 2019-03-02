@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-primary">Go Back</a>
<br><br>
<div class="card">
        <div class="card-header">
                <h2 style="font-weight: lighter">{{$post->title}}</h2>
                <img style="width: 100%;height:auto;" src="/storage/cover_images/{{$post->cover_image}}" alt="">  
        </div>
        <br><br>
        
     <div class="container">
        <small>Written on {{$post->created_at->format('F d, Y')}} <br>
                by <strong>{{$post->user['name']}}</strong>
        </small>
        <hr>
    <div class="card-body">
            <h5>{!!$post->body!!}</h5>
    </div>
     </div>
</div>
<hr>
@if(!Auth::guest())
@if(Auth::user()->id == $post->user_id)
<a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
{!!Form::open(['action' => ['PostsController@destroy',$post->id],'method' => 'POST','class'=>'float-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
@endif
@endif
@endsection