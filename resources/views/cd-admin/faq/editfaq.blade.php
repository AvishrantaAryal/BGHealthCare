@extends('cd-admin.home-master')

@section('page-title')  
Edit FAQ
@endsection

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit FAQ
    </h1>


    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">FAQ</a></li>
      <li class="active">Edit FAQ</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">

      <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Edit FAQ</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" class="form-horizontal" action= "{{url('/faqupdate/'.$t->id)}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="box-body">

              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Question<span style="color: red;">*</span></label>
                <div class="text text-danger">{{$errors->first('question')}}</div>

                <div class="col-sm-10">
                  <input type="text" class="form-control"required="" name="question" id="question" value="{{$t['question']}}" >
                </div>
              </div>

              
              
                
             

          <div class="form-group">
            <label for="Description" class="col-sm-2 control-label">Description<span style="color: red;">*</span></label>
            <div class="text text-danger">{{$errors->first('description')}}</div>

            <div class="col-sm-10">
             <textarea id="summernote" class="form-control" name="description" required="" >
              {!!$t['description']!!}
            </textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="Status" class="col-sm-2 control-label">Status<span style="color: red;">*</span>
          </label>
          <div class="text text-danger">{{$errors->first('status')}}</div>
          <div class="col-sm-10">
            <label>
              <input type="radio" class="minimal" <?php echo $t->status == 'active' ? 'checked' :  '' ?> checked name="status" value="active">Active
            </label>
            <label>
              <input type="radio"  class="minimal"  <?php echo $t->status == 'inactive' ? 'checked' :  '' ?> name="status" value="inactive">Inactive
            </label>

          </div>
        </div>

        
       

     

 </div>

 <div class="modal-footer">
  <a href="{{URL()->Previous()}}" class="btn btn-danger pull-left">Cancel</a>
  <button type="submit" class="btn btn-primary">Update</button>
  </div>
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