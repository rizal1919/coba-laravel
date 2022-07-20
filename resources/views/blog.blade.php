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
<div class="card my-5 text-center">
  <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
  <div class="card-body">
    <h3 class="card-title" style="text-transform: uppercase;"><a class="text-decoration-none text-dark" href="/blog/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
	<p style="letter-spacing: 0.5px;">
		<small class="text-muted">
		By.<a class="mx-1" href="/authors/{{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> in <a class="mx-1" href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>{{ $posts[0]->created_at->diffForHumans() }}
		</small>
	</p>
    
    <p class="card-text">{{ $posts[0]->excerpt }}</p>
	<a class="btn btn-primary" href="/blog/{{ $posts[0]->slug }}">Read more</a>
	
  </div>
</div>
@else
<p class="text-center fs-4">No posts found.</p>
@endif
<div class="container">
	<div class="row">
	@foreach( $posts->skip(1) as $post)
		<div class="col-md-4 mb-3">
			<div class="card">
				<div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7);"><a  class="text-white text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></div>
				<img src="https://source.unsplash.com/500x500?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
				<div class="card-body">
					<h5 class="card-title">{{ $post->title }}</h5>
					<p>By. 
						<a class="mx-1" href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a>{{ $post->created_at->diffForHumans() }}
					</p>
					<p class="card-text">{{ $post->excerpt }}</p>
					<a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read more</a>
				</div>
			</div>
			
		</div>
		@endforeach
	</div>
</div>
@endsection