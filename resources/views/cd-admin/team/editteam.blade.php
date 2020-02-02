
@extends('cd-admin.home-master')

@section('page-title')  
Edit Team
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
  Edit Team
  </h1>
  
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Team</a></li>
        <li class="active">Edit Team</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
       
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Team Member</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action= "{{url('updateteam/'.$team->id)}}" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name<span style="color: red;">*</span></label>
                  <div class="text text-danger">{{$errors->first('name')}}</div>

                  <div class="col-sm-10">
                      <input type="text" class="form-control"required="" name="name" id="name" value="{{$team->name}}" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="image" class="col-sm-2 control-label">Image<span style="color: red;">*</span></label>
                      <div class="text text-danger">{{$errors->first('image')}}</div>
                  <div class="col-sm-10">
                     <input type="file" class="form-control"  id="image" name="image" value="{{$team->image}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="altimage" class="col-sm-2 control-label">Image<br>Description<span style="color: red;">*</span></label>
                  <div class="text text-danger">{{$errors->first('altimage')}}</div>

                  <div class="col-sm-10">
                      <input type="text" class="form-control"required="" name="altimage" id="altimage" value="{{$team->altimage}}" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="Summary" class="col-sm-2 control-label">Position<span style="color: red;">*</span></label>
                    <div class="text text-danger">{{$errors->first('summary')}}</div>
                  <div class="col-sm-10">
                      <input type="text" class="form-control"required="" name="summary" id="summary" value="{{$team->summary}}" >
                  </div>
                </div>

                 <div class="form-group">
            <label for="Status" class="col-sm-2 control-label">Status<span style="color: red;">*</span>
            </label>
            <div class="text text-danger">{{$errors->first('status')}}</div>
            <div class="col-sm-10">
              <label>
              <input type="radio" class="minimal" <?php echo $team->status == 'active' ? 'checked' :  '' ?> checked name="status" value="active">Active
            </label>
            <label>
              <input type="radio"  class="minimal"  <?php echo $team->status == 'inactive' ? 'checked' :  '' ?> name="status" value="inactive">Inactive
            </label>

            </div>
          </div>


               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                 <a href="{{URL()->Previous()}}" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-success pull-right">Update Team</button>
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