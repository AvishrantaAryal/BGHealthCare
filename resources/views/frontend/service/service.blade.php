@extends('frontend.home-master')

<!-- page title -->
@section('page-title')	
Home | BG Health Care
@endsection


<!-- page content -->
@section('content')

<div class="container-fluid ">
	<div class="container service-page ">
		<div class="services-pages">
			<h4>our services</h4>
			<h1>Managed Healthcare Services</h1>
		</div>
		
		<div class="row">
			<div class="col-md-8 mx-auto">
				<div class="service_paragraph">
					<p></p>
				</div>
			</div>
		</div>



		<div class="row">
			@foreach($service as $ser)
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="more-detail">
					<div class="more-details-image">
						<img src="{{url('/imageupload/'.$ser->image)}}" alt="{{$ser->altimage}}" class="img-fluid">
					</div>
					<h4>{{$ser->title}}</h4>
					<p>{!!$ser->summary!!}</p>
					<div class="details-btn">
						<a href="{{url('/service-detail/'.$ser->slug)}}">More Details</a>
					</div>
				</div>
				
			</div>
			@endforeach
		</div>













	</div>
</div>


@endsection
