@extends('frontend.home-master')

<!-- page title -->
@section('page-title')	
Home | BG Health Care
@endsection



<!-- page content -->
@section('content')

<div class="container-fluid gallery-container">

    <div class="container">

        <div class="row">
            @foreach($img as $ga)
            <div class=" col-md-4">
             <div class="picture-section">
             	<a data-fancybox="gallery" href="{{url('/imageupload/'.$ga->image)}}">
			<div class="item-image-holder">

		 <img src="{{url('/imageupload/'.$ga->image)}}" class="img-fluid" alt="..">
        </a>
				                    		
                                            </div>

             </div>
            </div>
            @endforeach
            
            
           

             
             
        </div>

    </div>

</div>


@endsection





