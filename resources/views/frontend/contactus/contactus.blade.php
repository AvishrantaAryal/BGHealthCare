
@extends('frontend.home-master')

<!-- page title -->
@section('page-title')  
Home | BG Health Care
@endsection


<!-- page content -->
@section('content')
  
<div class="container-fluid ">
  <div class="container contact-bg">
    <div class="contactus-heading">
      <h1>Let's Connect</h1>
      @if(Session::has('success'))
        <div class="alert alert-info alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Mail Send Succesfully </strong>
          {{Session::get("message", '')}}
        </div>
        @endif
      <p>Feel Free to Contact Us</p>
    </div>
    <div class="row">
      <div class="col-md-6">

        <form class="form-section contactus-form-card" method="POST" action="{{url('/storecontact')}}">
          {{csrf_field()}}
          <div class="form-group">
            <label for="form-name">Name</label>
            <input type="text" class="form-control" id="form-name" placeholder="Name" required="" name="name">
          </div>
          <div class="form-group">
            <label for="form-email">Email Address</label>
            <input type="email" class="form-control" id="form-email" placeholder="Email Address" required="" name="email">
          </div>
          <div class="form-group">
            <label for="form-subject">Phone Number</label>
            <input type="tel" class="form-control" id="form-subject" placeholder="Phone no." required="" name="number"  >

          </div>
          <div class="form-group">
            <label for="form-message">Email your Message</label>
            <textarea class="form-control" name="message" id="form-message" placeholder="Message" rows="5"></textarea>
          </div>
          <div class="contactus-form-btn">
            <button class="btn" type="submit">Submit</button>
          </div>                
        </form>         
      </div>

      <div class="col-md-6">
        <div class=" map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.3876000610812!2d85.33927831453755!3d27.674412833546516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190fc042d399%3A0x6064967133397f28!2sCreatu%20Developers!5e0!3m2!1sen!2snp!4v1577607978554!5m2!1sen!2snp" width="100% " height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>

    </div>
  </div>
</div>

@endsection