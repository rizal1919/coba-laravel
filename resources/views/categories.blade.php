@extends('layouts/main')

@section('container')
	<h1>Halaman : {{ $title }}</h1>
	<div class="container my-5">
		<div class="row">
		@foreach($categories as $category)
			<div class="col-md-4">
				<a href="/blog?category={{ $category->slug }}">
				<div class="card bg-dark text-white">
				<img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
				<div class="card-img-overlay d-flex align-items-center p-0">
					<h5 class="card-title text-center flex-fill p-4 fs-3">{{ $category->name }}</h5>
				</div>
				</div>
				</a>
			</div>
		@endforeach
		</div>
	</div>
	<br>
@endsection