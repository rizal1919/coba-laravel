@extends('layouts/main')

@section('container')
	<h1>Halaman : {{ $title }}</h1>
	
	@foreach ( $categories as $category )
		<br>
		<h2>
			<a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
		</h2>
	@endforeach
@endsection