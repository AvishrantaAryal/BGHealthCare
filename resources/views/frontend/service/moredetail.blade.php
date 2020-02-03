
@extends('frontend.home-master')

<!-- page title -->
@section('page-title')	
Home | BG Health Care
@endsection



<!-- page content -->
@section('content')

<div class="container-fluid ">
	<div class="container service-next-page ">
		<div class="services-next-pages">
			<h4>{{$servicedetail->title}}</h4>
			<!-- <h1>Managed Healthcare Services</h1> -->
		</div>
		
		<div class="row">
			<div class="col-md-9 mx-auto">
				<div class="service-next-paragraph">
					<p>{!!$servicedetail->description!!}</p>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container-fluid service-image pa-0">
	<img src="{{url('/imageupload/'.$servicedetail->image)}}" alt="{{$servicedetail->altimage}}" class="img-fluid">
</div>



<div class="container-fluid service">
	<div class="container">
		<div class="services">
			<h4>our services</h4>
		</div>

		<div class="row">
			@foreach($ser as $se)
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="more_details">

					<div class="more-details-image">
						<img src="{{url('/imageupload/'.$se->image)}}" alt="{{$se->altimage}}" class="img-fluid">
					</div>

					<h4>{{$se->title}}</h4>
					<p>{!!$se->summary!!}</p>
					<div class="detail_btn">
							<a href="{{url('/service-detail/'.$se->slug)}}">More Details</a>
					</div>
				</div>
				
			</div>
			@endforeach

		
		</div>


		<div class="explore_service">
			<h6>Don't hesitate,contact us for better help and services. <a href="{{url('service')}}">Explore all services</a></h6>
		</div>











	</div>
</div>







@endsection