@extends('layouts/main')

@section('container')
	<h1>Halaman Category : {{ $category }}</h1>
	
	@foreach ( $posts as $post )
		<br>
		<h2>
			<a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
		</h2>
		<p>{{ $post->excerpt }}</p>
	@endforeach
@endsection