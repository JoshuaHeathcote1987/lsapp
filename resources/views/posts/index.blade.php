@extends('layouts.app')

@section('content')
	<h3>Posts</h3>
	@if(count($posts) > 0)
		@foreach($posts as $post)
			<div class='card' style="margin-bottom: 20px;">
				<div class="card">
						<div class="card-body">
							<a href="/posts/{{$post->id}}">{{$post->title}}</a> | {{$post->created_at}} 
						</div>
				</div>
            </div>
			@endforeach'

	@else 
		<p>No post found</p>
	@endif
@endsection