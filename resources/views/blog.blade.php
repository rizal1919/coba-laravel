@extends('layouts/main')



@section('container')
<h1>Halaman {{ $title }}</h1>
<!-- @if ($posts->count())
	<div class="card mb-3 text-center">
		<img src="https://source.unsplash.com/1000x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
		<div class="card-body">
			<h2 class="card-title">{{ $posts[0]->title }}</h2>
			<p style="margin-top: 8px; font-weight: bold; margin-bottom: 5px;">by <a href="/authors/{{ $posts[0]->user->username }}" style="color: rgba(255,159,41,1);">{{ $posts[0]->user->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" style="color: rgba(255,159,41,1)">{{ $posts[0]->category->name }}</a></p>
			<p class="card-text">{{ $posts[0]->excerpt }}</p>
			<p class="card-text"><small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
			<a class="text-decoration-none btn btn-outline-primary" href="posts/{{ $posts[0]->slug }}">Read more</a>
		</div>
		</div>
	</div>
@else
	<p class="text-center fs-4">no post found</p>
@endif -->

	
<!-- @foreach ( $posts as $post )
	<br>
	<h2>
		<a href="/blog/{{ $post->slug }}" style="Color: rgba(26,77,46,1);">{{ $post->title }}</a>
	</h2>
	<p style="margin-top: 8px; font-weight: bold; margin-bottom: 5px;">by <a href="/authors/{{ $post->user->username }}" style="color: rgba(255,159,41,1);">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" style="color: rgba(255,159,41,1)">{{ $post->category->name }}</a></p>
	<p style="width: 75%; margin-bottom: 10px; padding:0px; box-sizing:border-box;">{{ $post->excerpt }}</p>
	<a href="/categories/{{ $post->category->slug }}" style=" font-weight: bold; color: rgba(26,77,46,1);">Read more ...</a>
	<p style="border-bottom: 1px solid gray; width: 75%; margin-top: 10px;"></p>

@endforeach -->

@if ($posts->count()) 
<!-- akan menghasilkan false jika nilainya < 0 -->
<div class="card mb-3">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title">{{ $posts[0]->title }}</h3>
	<p>by <a href="/authors/{{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a></p>
    
    <p class="card-text">{{ $posts[0]->excerpt }}</p>
	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
	
  </div>
</div>
@else
<p class="text-center fs-4">No posts found.</p>
@endif
@foreach( $posts as $post )
	<h2 style="text-transform: uppercase;" class="mt-5"><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h2>
	<p>by <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
	<p>{{ $post->excerpt }}</p>
	<a href="/categories/{{ $post->category->slug }}">Read more ...</a>

@endforeach
@endsection