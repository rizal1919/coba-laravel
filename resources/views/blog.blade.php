@extends('layouts/main')

@section('container')
	<h1>Halaman Post</h1>
	
	@foreach ( $posts as $post )
		<br>
		<h2>
			<a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
		</h2>
		<p style="margin-top: 8px; margin-bottom: 5px;">by <a href="#">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
		<p style="width: 75%; padding:10px; box-sizing:border-box;">{{ $post->excerpt }}</p>
		<a href="/categories/{{ $post->category->slug }}" style="margin-left: 10px;">read more ...</a>
		<p style="border-bottom: 0.3px solid white; width: 75%; margin-top: 10px;"></p>

	@endforeach
@endsection