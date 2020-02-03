@extends('frontend.home-master')

<!-- page title -->
@section('page-title')	
Home | BG Health Care
@endsection



<!-- page content -->
@section('content')



<div class="container-fluid">
	<div class="container blogdetail-bg">
<div class="blog-main-content">
	<h1>Blog & News</h1>
</div>

		<div class="row">
			<div class="col-md-6 ">
				


				<div class="blogdetails-image">
					<img src="{{url('/imageupload/'.$blogdetail->image)}}" class="img-fluid" alt="">
				</div>
			</div>
			
			<div class="col-md-6 blogdetail ">
				<div class="blogdetail-date">
					<p> <i class="fas fa-calendar-alt">{{ \Carbon\Carbon::parse($blogdetail->created_at)->format('d/m/Y')}}</p></i>

				</div>


				<div class="blogedetail-content">
					<h4>{{$blogdetail->title}}</h4>

					{{$blogdetail->summary}}
				</div>
			</div>

			

			

		</div>
		<hr>


	
</div>

	</div>
</div>


<div class="container-fluid blog-main-bg pa-0">
	<h4>Because your health matter the most</h4>
</div>




<div class="container-fluid next-content-bg">
	<div class="container">
		<div class="next-content">
			<h3>{{$blogdetail->title}}</h3>
			<hr>
			{!!$blogdetail->description!!}
		</div>
	</div>
</div>


@endsection