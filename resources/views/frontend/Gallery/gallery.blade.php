
@extends('frontend.home-master')

<!-- page title -->
@section('page-title')	
Home | BG Health Care
@endsection



<!-- page content -->
@section('content')


<div class="container-fluid">
	<div class="container gallery">
		<div class="services-pages">
			<h4>our Gallery</h4>
		</div>
		<div class="row">
				@foreach($gal as $ga)
			<div class="col-md-4">
				<div class="gallery-section">
					<a href="{{url('picture')}}">
						<div class="gallery-section-image">
						 	<img src="{{url('/imageupload/'.$ga->image)}}" class="img-fluid" alt="{{$ga->altimage}}"> </a>
						</div>
					<div class="gallery-btn">
						<a href="{{url('picture/'.$ga->id)}}">{{$ga->name}}</a>
					</div>
				</div>
			</div>
			@endforeach
			

	</div>
	</div>
</div>

@endsection