@extends('cd-admin.home-master')

@section('page-title')  
Reply 
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
  Reply Contact
  </h1>
  
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Contact</a></li>
        <li class="active">Reply Contact</li>
      </ol>
    </section>


<section class="content">
      <div class="row">
        
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary" style="margin-top: 20px;">
            <div class="box-header with-border">
               <i class="fa fa-envelope"></i>

              <h3 class="box-title">Reply Contact</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="{{url('storereply',$n->id)}}" enctype="multipart/form-data" >
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Receiver`s Email </label>
                  <div class="text text-danger">{{$errors->first('email')}}</div>
                  <input type="text" class="form-control" name="email"  value="{{$n->email}}">
                
                </div>

                <div class="form-group">
                  <label for="name">Subject</label>
                  <div class="text text-danger">{{$errors->first('subject')}}</div>
                  <input type="text" class="form-control" name="subject"  id="name" placeholder="Enter Subject">
                
                </div>
                <div class="form-group">
                    <label for="text">Message</label>
                    <div class="text text-danger">{{$errors->first('message')}}</div>
                  <textarea name="message" id="summernote" rows="20" cols="80">
                    
                  </textarea>
                </div>


                <div class="form-group">
                <div class="text text-danger">{{$errors->first('active')}}</div>
                <label for="status">Status</label>
                  <div class="radio">
                    <label>
                      
                      <input type="radio" class="minimal" name="status"  value="active" checked >Replyed<br>
                      

                    </label>
                  </div>
                 

              </div>
                
             

               
       

              </div>
              
            <button class="btn btn-success pull-right " type="submit">Reply</button>
          
          <a href="{{URL()->Previous()}}" class="btn btn-danger">Cancel</a>
               

          
            </form>
      
          </div>
          <!-- /.box -->
      </div>
      
  </div>
</section>



</div>
       
@endsection