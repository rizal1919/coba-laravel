@extends('layouts/main')

@section('container')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 text-justify">
			<h2 style="text-transform: uppercase;">{{ $new_post->title }}</h2>
			<br>
			<p>by <a href="/blog?user={{ $new_post->user->username }}">{{ $new_post->category->name }}</a> in <a href="/blog?category={{ $new_post->category->slug }}">{{ $new_post->category->name }}</a></p>
			<!-- <p>{{ $new_post->body }}</p> -->
			<!-- gunanya untuk meng-escape tag html -->
			
			<img src="https://source.unsplash.com/1300x600?{{ $new_post->category->name }}" alt="$new_post->category->name" class="img-fluid my-3">
				
			{!! $new_post->body !!}
			<br>
			<!-- gunanya untuk mengeksekusi tag html -->
			<a class="my-5" href="/blog">Back to Post</a>
			<div class="my-5"></div>
		</div>
	</div>
</div>
@endsection