
@extends('cd-admin.home-master')

@section('page-title')  
Add Image
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
  Add Image
  </h1>
  
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Gallery</a></li>
        <li class="active">Add Image</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
       
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Image</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action= "{{url('imagestore',$g->id)}}" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">

                <div class="form-group">
                  <label for="Name" class="col-sm-2 control-label">Album Name ::{{$g->name}}</label>
                    
                </div>
                 <input type="hidden" name="gallery_id" value="{{$g->id}}">
                
                <div class="form-group">
                  <label for="image" class="col-sm-2 control-label">Image<span style="color: red;">*</span></label>
                      <div class="text text-danger">{{$errors->first('image')}}</div>
                  <div class="col-sm-10">
                     <input type="file" class="form-control" required="" id="image" name="image" value="{{old('image')}}">
                  </div>
                </div>
                

                 


               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                 <a href="{{URL()->Previous()}}" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-success pull-right">Add Album</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
          
          <!-- /.box -->
        </div>
        
        
      </div>
    </section>


</div>


@endsection