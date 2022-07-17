@extends('layouts/main')

@section('container')
	<h1 class="big-title">Halaman Post</h1>
	
	@foreach ( $posts as $post )
		<br>
		<h2>
			<a href="/blog/{{ $post->slug }}" style="Color: rgba(26,77,46,1);">{{ $post->title }}</a>
		</h2>
		<p style="margin-top: 8px; font-weight: bold; margin-bottom: 5px;">by <a href="#" style="color: rgba(255,159,41,1);">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" style="color: rgba(255,159,41,1)">{{ $post->category->name }}</a></p>
		<p style="width: 75%; margin-bottom: 10px; padding:0px; box-sizing:border-box;">{{ $post->excerpt }}</p>
		<a href="/categories/{{ $post->category->slug }}" style=" font-weight: bold; color: rgba(26,77,46,1);">Read more ...</a>
		<p style="border-bottom: 1px solid gray; width: 75%; margin-top: 10px;"></p>

	@endforeach
@endsection