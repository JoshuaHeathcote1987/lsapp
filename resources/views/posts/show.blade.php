@extends('layouts.app')

@section('content')

<a href="/posts" type="button" class="btn btn-primary" style="width: 100px;">Back</a>

<a href="/posts/{{$post->id}}/edit" type="button" class="btn btn-info" style="width: 100px;">Edit</a>


<div class="card" style="margin-top: 20px;">
    <div class="card-header">
        {{$post->title}}
    </div>
    <div class="card-body">
        <p class="card-text">{!!$post->body!!}</p>
    </div>
    <div class="card-footer">
        Written on {{$post->created_at}} by {{$post->user->name}}
    </div>
    

    <a href="/posts/{{$post->id}}/edit" class="btn btn-success" style="width: 200px; float: right;">Edit</a>

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class'=> '', 'style' => 'display: inline-block; float: right;'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger', 'style' => 'width: 200px;'])}}
    {!!Form::close()!!}

</div>
@endsection