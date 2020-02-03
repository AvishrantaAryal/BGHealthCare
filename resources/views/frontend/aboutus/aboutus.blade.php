@extends('frontend.home-master')

<!-- page title -->
@section('page-title')	
About | BG Health Care
@endsection


<!-- page content -->
@section('content')

<div class="container-fluid">

  <div class="container about-main">

    <div class="about-content">
      <h1>About Us</h1>
      <h2>{{$about->tagline}}</h2>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="about-paragraph">
          <p>
            {!!$about->description!!}

        </p>		
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="about-image">
          <img src="{{url('/imageupload/'.$about->image)}}" alt="{{$about->altimage}}">
        </div>
      </div>
    </div>

  </div>
</div>





<!--team-->
<div class="container-fluid team-main-next">

  <div class="container">

    <div class="our-team-next">
      <h4>Meet our team</h4>
      <h1>A professional & friendly care provider</h1>
    </div>

    <div class="row">
      <div class="col-md-8 mx-auto">
        <div class="team-paragraph-next">

          <p></p>
        </div>
      </div>
    </div>


    <div class="row teachers-section-main "> 
      @foreach($team as $teams)
      <div class="col-md-3">
        <div class=" staff-main-image">
          <img src="{{url('/imageupload/'.$teams->image)}}" class="img-fluid" alt="{{$teams->altimage}}">
        </div>

        <div class="content-main-staff">
          <h4>{{$teams->name}}</h4>
          <p>{{$teams->summary}} </p>
        </div>
      </div>
      @endforeach      


    </div>
  </div>
</div>
@endsection