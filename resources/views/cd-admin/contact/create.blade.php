@extends('cd-admin.home-master')

@section('page-title')  
Contact Form
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
 Create
  </h1>
  
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Contact</a></li>
        <li class="active">Create Contact</li>
      </ol>
    </section>


<section class="content"> 
<div class="row">
  <div class="col-md-12 box1">
    <div class="box box-default">
      <div class="box-header">
        <h3 class="box-title">Create Contact</h3>
      </div>
      <div class="box-body">
        <!-- Date dd/mm/yyyy -->
        <form role="form" method="post" action= "{{url('storecontact')}}" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="form-group">
                  <label for="name">Name</label>
                  <div class="text text-danger">{{$errors->first('name')}}</div>
                  <input type="text" class="form-control" name="name"  id="name" placeholder="Enter Name">
                
                </div>

                <div class="form-group">
                  <label for="name">Email</label>
                  <div class="text text-danger">{{$errors->first('email')}}</div>
                  <input type="text" class="form-control" name="email"  id="name" placeholder="Enter Email ID">
                
                </div>

                
                <div class="form-group">
                  <label for="name">Subject</label>
                  <div class="text text-danger">{{$errors->first('subject')}}</div>
                  <input type="text" class="form-control" name="subject"  id="subject" placeholder="Enter subject">
                
                </div>

                <div class="form-group">
                    <label for="text">Message</label>
                    <div class="text text-danger">{{$errors->first('message')}}</div>
                  <textarea name="message" id="summernote" rows="20" cols="80">
                    
                  </textarea>
                </div>
                
             

               
       

              
       
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <button class="btn btn-primary" type="submit">Add Article</button>
          </div>
          <div class="col-md-4"></div>
        </form>
            <a href="{{URL()->Previous()}}"><button class="btn btn-danger">Cancel</button></a>
      </div>
    </div>
  </div>


</div>



</section>
</div>

      

      <!-- /.box -->


    <style type="text/css">
      .test1 
      {
        margin-left:15px;
        margin-right: 15px; 
      }
      .box1
      {
        margin-bottom: 15px;
        margin-top: 15px;
      }
    </style>
    @endsection



