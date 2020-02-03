@extends('frontend.home-master')

<!-- page title -->
@section('page-title')	
Home | BG Health Care
@endsection


<!-- page content -->
@section('content')



<!-- background -->


<div class="container-fluid p-0">
	<div class="bg_image">
		<h2>
			<p>Dedicated</p>
			<p>Medicare</p>
			<p class="par_desc">Because your health matter the most</p>
		</h2>
	</div>
</div>
<!-- end of background -->






<!-- inquiryform -->
<div class="container">
	<div class="home-inquiry-form-card">
		@if(Session::has('success'))
        <div class="alert alert-info alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Message Send Succesfully </strong>
          {{Session::get("message", '')}}
        </div>
        @endif
		<form method="post" action="{{url('/store-appointment')}}">
			{{csrf_field()}}
		<div class="row">
			
			<div class="col-md">
				<div class="form-group">
					<label for="exampleInputName1">Name</label>
					<input type="text" name="name" required="" class="form-control" id="exampleInputName1" placeholder="Enter full name" aria-describedby="NameHelp">
				</div>
			</div>

			<div class="col-md">
				<div class="form-group">
					<label for="exampleInputNumber1">Email</label>
					<input type="email" name="email" required="" class="form-control" id="exampleInputNumber1" placeholder="Enter Email Address">
				</div>
			</div>

			<div class="col-md">
				<div class="form-group">
					<label for="exampleFormControlSelect1">Select Service</label>
					<select class="form-control" id="exampleFormControlSelect1" name="service" required="" >
						<option>Select One</option>
						<option>Service One</option>
						<option>Service Two</option>
						<option>Service Three</option>
						<option>Service Four</option>
						<option>Service Five</option>
					</select>
				</div>
			</div>

			<div class="col-md">
				<div class="form-group">
					<label for="exampleFormControlSelect1">Select Location</label>
					<select class="form-control" id="exampleFormControlSelect1" name="location" required="">
						<option>Select One</option>
						<option>Location One</option>
						<option>Location Two</option>
						<option>Location Three</option>
						<option>Location Four</option>
						<option>Location Five</option>
					</select>
				</div>
			</div>

			<div class="col-md">
				<div class="home-inquiry-form-btn">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</div>
		</form>
		
	</div>
</div>





<div class="container-fluid default_pad">
	<div class="container">
		<div class="row">
			<div class="col-md-6 health_care_right">

				<div class="hlt_care">
					<img src="{{url('/imageupload/'.$about->image)}}" alt="{{$about->altimage}}" class="img-fluid">
				</div>
				
			</div>
			<div class="col-md-6">
				<div class="about_us">
					<h4>about us</h4>
					<h1>We established cooperation with various global partners.</h1>
					<p>{!!$about->summary!!}</p>
					<a href="{{url('aboutus')}}">More about us</a>
				</div>
			</div>
		</div>
	</div>
</div>





<!-- services -->

<div class="container-fluid service">
	<div class="container">
		<div class="services">
			<h4>our services</h4>
			<h1>Managed health care services</h1>
		</div>
		


		<div class="row">
			@foreach($ser as $se)
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="more_details">
					<div class="more-details-image">
						<img src="{{url('/imageupload/'.$se->image)}}" alt="{{$se->altimage}}" class="img-fluid">
					</div>
					<h4>{{$se->title}}</h4>
					<p>{{$se->summary}}</p>
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


<!-- end of services -->


<!-- team -->

<div class="container-fluid team">
	<div class="container">
		<div class="my_team">
			<h4>meet our team</h4>
			<h1>A professional & friendly care provider</h1>
		</div>
		<div class="row">
			<div class="col-md-8 mx-auto">
				<div class="team_par">

					<p>
						
					</p>
				</div>
			</div>
		</div>




		<div class="row teachers-section "> 
			@foreach($team as $teams)
			<div class="col-md-3">
				<div class=" staff-group-image">
					<img src="{{url('/imageupload/'.$teams->image)}}" class="img-fluid" alt="{{$teams->altimage}}">

				</div>
				<div class="content-staff">
					<h4>{{$teams->name}}</h4>
					<p>{{$teams->summary}} </p>
				</div>

			</div>
			@endforeach        


			
			
			
		</div>





	</div>
</div>

<!-- end of team -->



<!-- appointment -->

<div class="container-fluid request">
	<div class="req_apoint">
		<h6>We 're here for you. Call us at 1-877-632-6789 <!--or <a href="#">request and appointment online</a>--></h6>
	</div>
</div>
<!-- end of appointment -->


<!-- simple process -->

<div class="container-fluid blog-main-section pa-0">
	<div class="container ">
		<div class="blog-main-content">
			<h2>Blogs & News</h2>

			
		</div>


		<div class="row">
			@foreach($blog as $bl)
			<div class="col-md-3">
				<div class="blog-main-image">
					<img src="{{url('/imageupload/'.$bl->image)}}" class="img-fluid" alt="{{$bl->image}}">
				</div>

				<div class="blog-main-date">
					<p> <i class="fas fa-calendar-alt">{{ \Carbon\Carbon::parse($bl->created_at)->format('d/m/Y')}}</p></i>

				</div>
				<div class="blog-main-para">

					<p>{{$bl->title}}</p>
				</div>

				<div class="read-main-btn">
					  <a href="{{url('/blog-detail/'.$bl->slug)}}">Continue...</a>
				</div>
			</div>
			@endforeach

			
			

			
<!--
    <div class="view-blog">
        <a href="{{url('blog')}}">View all</a>
    </div>-->
</div>
</div>


<!-- caregiver -->

<div class="container-fluid caregiver">
	<div class="careblock">


		<div class="careblock_header">
			<h4>Stay healthy and strong to enjoy life</h4>
		</div>

		<div class="careblock_title">
			<h2>Believe. Consolation. Reality</h2>
		</div>


		<a class="caregiver_btn" href="{{url('contactus')}}">Contact Us</a>
	</div>		
	
</div>

<!-- end of cargiver -->

<!-- end of simple process -->







@endsection