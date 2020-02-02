@extends('cd-admin.home-master')

@section('page-title')  
Add Blogs
@endsection

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Add Blogs
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
            <h3 class="box-title">Add Blogs</h3>
          </div>
          <div class="box-body">
            <form class="form-horizontal" method="post" action= "{{url('storeblog')}}" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
              <input type="hidden" name="slug"> 
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Blog Title<span style="color: red;">*</span></label>
                  <div class="text text-danger">{{$errors->first('title')}}</div>

                  <div class="col-sm-10">
                    <input type="text" class="form-control"required="" name="title" id="name" value="{{old('title')}}" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="Image" class="col-sm-2 control-label">Image<span style="color: red;">*</span></label>
                  <div class="text text-danger">{{$errors->first('image')}}</div>

                  <div class="col-sm-10">
                    <input type="file" class="form-control" required="" id="image" name="image" value="{{old('image')}}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="Alternative Image Name" class="col-sm-2 control-label">Image<br>Description<span style="color: red;">*</span></label>
                  <div class="text text-danger">{{$errors->first('altimage')}}</div>

                  <div class="col-sm-10">
                   <input type="text" class="form-control"required="" name="altimage" id="altimage" value="{{old('altimage')}}" >
                 </div>
               </div>

               <div class="form-group">
                <label for="Summary" class="col-sm-2 control-label">Summary<span style="color: red;">*</span></label>
                <div class="text text-danger">{{$errors->first('summary')}}</div>

                <div class="col-sm-10">
                 <textarea class="form-control" name="summary" required="" >
                  {{old('summary')}}
                </textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="Description" class="col-sm-2 control-label">Description<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('description')}}</div>

              <div class="col-sm-10">
               <textarea id="summernote" class="form-control" name="description" required="" >
                {{old('description')}}
              </textarea>
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

          <hr>
          <div class="form-group">
            <label for="SEO Title" class="col-sm-2 control-label">SEO Title<span style="color: red;">*</span></label>
            <div class="text text-danger">{{$errors->first('seotitle')}}</div>

            <div class="col-sm-10">
             <input type="text" class="form-control" name="seotitle" id="seotitle" value="{{old('seotitle')}}" required="" >
           </div>
         </div>

         <div class="form-group">
          <label for="SEO Keywords" class="col-sm-2 control-label">SEO Keywords<span style="color: red;">*</span></label>
          <div class="text text-danger">{{$errors->first('keywords')}}</div>

          <div class="col-sm-10">
           <input type="text" class="form-control" required="" name="keywords" id="keywords" value="{{old('keywords')}}" >
         </div>
       </div>

       <div class="form-group">
        <label for="SEO Description" class="col-sm-2 control-label">SEO Description<span style="color: red;">*</span></label>
        <div class="text text-danger">{{$errors->first('seodescription')}}</div>

        <div class="col-sm-10">
         <input type="text" class="form-control" required="" name="seodescription"value="{{old('seodescription')}}">
       </div>
     </div>




   </div>
   <!-- /.box-body -->
   <div class="box-footer">
     <a href="{{URL()->Previous()}}" class="btn btn-danger">Cancel</a>
     <button type="submit" class="btn btn-success pull-right">Add Blog</button>
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



