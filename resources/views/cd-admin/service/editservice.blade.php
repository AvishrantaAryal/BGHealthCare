@extends('cd-admin.home-master')

@section('page-title')  
Edit Service
@endsection

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit Service
    </h1>


    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Service</a></li>
      <li class="active">Edit Service</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">

      <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Service</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" class="form-horizontal" action= "{{url('/serviceupdate/'.$t->id)}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="box-body">

              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Service Title<span style="color: red;">*</span></label>
                <div class="text text-danger">{{$errors->first('title')}}</div>

                <div class="col-sm-10">
                  <input type="text" class="form-control"required="" name="title" id="name" value="{{$t['title']}}" >
                </div>
              </div>

              <div class="form-group">
                <label for="Image" class="col-sm-2 control-label">Image<span style="color: red;">*</span></label>
                <div class="text text-danger">{{$errors->first('image')}}</div>

                <div class="col-sm-10">
                  <input type="file" class="form-control" id="image" name="image" >
                </div>
              </div>

              <div class="form-group">
                <label for="Alternative Image Name" class="col-sm-2 control-label">Image<br>Description<span style="color: red;">*</span></label>
                <div class="text text-danger">{{$errors->first('altimage')}}</div>

                <div class="col-sm-10">
                 <input type="text" class="form-control"required="" name="altimage" id="altimage" value="{{$t['altimage']}}" >
               </div>
             </div>

             <div class="form-group">
              <label for="Summary" class="col-sm-2 control-label">Summary<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('summary')}}</div>

              <div class="col-sm-10">
               <textarea class="form-control" name="summary" required="" >
                {!!$t['summary']!!}
              </textarea>
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

        <hr>
        <div class="form-group">
          <label for="SEO Title" class="col-sm-2 control-label">SEO Title<span style="color: red;">*</span></label>
          <div class="text text-danger">{{$errors->first('seotitle')}}</div>

          <div class="col-sm-10">
           <input type="text" class="form-control" name="seotitle" id="seotitle" value="{{$t['seotitle']}}" required="" >
         </div>
       </div>

       <div class="form-group">
        <label for="SEO Keywords" class="col-sm-2 control-label">SEO Keywords<span style="color: red;">*</span></label>
        <div class="text text-danger">{{$errors->first('keywords')}}</div>

        <div class="col-sm-10">
         <input type="text" class="form-control" required="" name="keywords" id="keywords" value="{{$t['keywords']}}" >
       </div>
     </div>

     <div class="form-group">
      <label for="SEO Description" class="col-sm-2 control-label">SEO Description<span style="color: red;">*</span></label>
      <div class="text text-danger">{{$errors->first('seodescription')}}</div>

      <div class="col-sm-10">
       <input type="text" class="form-control" required="" name="seodescription"value="{{$t['seodescription']}}">
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