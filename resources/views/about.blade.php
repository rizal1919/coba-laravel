@extends('layouts.main')

@section('container')

	<div class="container-lg mt-5">
		<div class="row justify-content-center">
			<div class="card mb-3" style="width: 840px;">
				<div class="row no-gutters">
					<div class="col-md-9">
						<img src="https://source.unsplash.com/1200x600?Asian%20Man" class="card-img" alt="Asian-Man">
					</div>
					<div class="col-md-3">
						<div class="card-body align-items-center mt-5">
							<h5 class="card-title">{{ $name }}</h5>
							<p class="card-text">Hi, From Anywhere</p>
							<p class="card-text"><small class="text-muted">From {{ $location }}</small></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection