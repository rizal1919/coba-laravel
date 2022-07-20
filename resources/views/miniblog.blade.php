@extends('layouts/main')

@section('container')
	<h2 style="text-transform: uppercase;">{{ $new_post->title }}</h2>
	<br>
	<p>by {{ $new_post->user->name }} in <a href="/categories/{{ $new_post->category->slug }}">{{ $new_post->category->name }}</a></p>
	<p>{{ $new_post->body }}</p>
	<!-- gunanya untuk meng-escape tag html -->

	{!! $new_post->body !!}
	<!-- gunanya untuk mengeksekusi tag html -->
	<a href="/blog">Back to Post</a>
@endsection