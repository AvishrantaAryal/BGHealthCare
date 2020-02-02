@extends('cd-admin.home-master')

@section('page-title')  
Add Admin
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
  Add Admin
  </h1>
  
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin</a></li>
        <li class="active">Add Admin</li>
      </ol>
    </section>


<section class="content"> 
<div class="row">
  <div class="col-md-12 box1">
    <div class="box box-default">
      <div class="box-header">
        <h3 class="box-title">Add Admin</h3>
      </div>
      <div class="box-body">
        <!-- Date dd/mm/yyyy -->
        <form method="post" action="{{url('storeadmin')}}"  >
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
                  <label for="name">Password</label>
                  <div class="text text-danger">{{$errors->first('password')}}</div>
                  <input type="Password" class="form-control" name="password"  id="subject" placeholder="Enter Password">
                
                </div>
                <div class="form-group">
                  <label for="name">Confirm Password</label>
                  <div class="text text-danger">{{$errors->first('password_confirmation')}}</div>
                  <input type="Password" class="form-control" name="password_confirmation"  id="password_confirmtion" placeholder="Confirm Password">
                
                </div>
               <div class="form-group">
            <label for="role">Role</label><br>
            <input type="radio" name="role" class="minimal" checked value="superadmin"> <?php echo old('role')=='superadmin' ? 'checked' : ' '  ?> Superadmin
            <input type="radio" name="role" class="minimal" value="admin"> <?php echo old('role')=='admin' ? 'checked' : ' '  ?>   admin
          </div>
          
            <button class="btn btn-success pull-right" type="submit">Add Admin</button>
         <a href="{{URL()->Previous()}}" class="btn btn-danger">Cancel</a>
        </form>
           
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


