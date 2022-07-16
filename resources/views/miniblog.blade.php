@extends('layouts/main')

@section('container')
	<h2>{{ $new_post->title }}</h2>
	<p>{{ $new_post->body }}</p>
	<!-- gunanya untuk meng-escape tag html -->

	{!! $new_post->body !!}
	<!-- gunanya untuk mengeksekusi tag html -->
	<a href="/blog">Back to Post</a>
@endsection