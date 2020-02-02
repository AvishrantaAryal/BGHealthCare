@extends('cd-admin.home-master')

@section('page-title')  
Add Locations
@endsection

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Add Location
    </h1>


    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Services</a></li>
      <li class="active">Add Services</li>
    </ol>
  </section>


  <section class="content"> 
    <div class="row">
      <div class="col-md-12 box1">
        <div class="box box-default">
          <div class="box-header">
            <h3 class="box-title">Add Location</h3>
          </div>
          <div class="box-body">
            <form class="form-horizontal" method="post" action= "{{url('storelocation')}}" >
              {{csrf_field()}}
              <div class="box-body">
              <input type="hidden" name="slug"> 
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Location<span style="color: red;">*</span></label>
                  <div class="text text-danger">{{$errors->first('name')}}</div>

                  <div class="col-sm-10">
                    <input type="text" class="form-control"required="" name="name" id="name" value="{{old('name')}}" >
                  </div>
                </div>

                
          <div class="form-group">
            <label for="Status" class="col-sm-2 control-label">Status<span style="color: red;">*</span>
            </label>
            <div class="text text-danger">{{$errors->first('status')}}</div>
            <div class="col-sm-10">
              <label>
                <input type="radio" class="minimal" name="status" value="active" required="" <?php echo old('status')=='active' ? 'checked' : ' '  ?> >
                Active
              </label>
              <label>
                <input type="radio" class="minimal" name="status" value="inactive"required="" <?php echo old('status')=='inactive' ? 'checked' : ' '  ?>>
                Inactive
              </label>

            </div>
          </div>

                  
         
       



   </div>
   <!-- /.box-body -->
   <div class="box-footer">
     <a href="{{URL()->Previous()}}" class="btn btn-danger">Cancel</a>
     <button type="submit" class="btn btn-success pull-right">Add Location</button>
   </div>
   <!-- /.box-footer -->
 </form>
 <!-- Date dd/mm/yyyy -->












</div>
</div>
</div>


</div>



</section>
</div>



<!-- /.box -->


@endsection



