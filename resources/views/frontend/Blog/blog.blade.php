@extends('frontend.home-master')

<!-- page title -->
@section('page-title')	
Home | BG Health Care
@endsection



<!-- page content -->
@section('content')



<!--blog section-->
<div class="container-fluid">
  <div class="container blog-section">
    <div class="services-pages">
      <h4>Blog and news</h4>
    </div>

    <div class="row">
      @foreach($blog as $blogs)
      <div class="col-md-4">
        <div class="blog-news-image">
          <img src="{{url('/imageupload/'.$blogs->image)}}" class="img-fluid" alt="{{$blogs->altimage}}">
        </div>

        <div class="blog-news-date">
          <p> <i class="fas fa-calendar-alt">{{ \Carbon\Carbon::parse($blogs->created_at)->format('d/m/Y')}}</p></i>

        </div>
        <div class="blog-news-para">

          <p>{{$blogs->title}}</p>
        </div>

        <div class="read-btn">
          <a href="{{url('/blog-detail/'.$blogs->slug)}}">Continue...</a>
        </div>
      </div>
      @endforeach
  </div>
  
</div>
</div>


@endsection