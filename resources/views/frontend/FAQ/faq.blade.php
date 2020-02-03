@extends('frontend.home-master')

<!-- page title -->
@section('page-title')	
Home | BG Health Care
@endsection


<!-- page content -->
@section('content')

<div class="container-fluid">
  <div class="container faq-main">

    <div class="services-pages">
      <h4>Frequently Asked Question</h4>
    </div>

    <div class="accordion" id="accordionExample">
      @foreach($faq as $fa)
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              {{$fa->question}} 
            </button>
          </h2>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            {!!$fa->description!!}
          </div>
        </div>
      </div>
      @endforeach

      </div>
      </div>
    </div>
  </div>
</div>



@endsection