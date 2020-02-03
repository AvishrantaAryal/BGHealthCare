<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b></b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>BG Health</b>Care</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{url('public/images/5.jpg')}}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{Auth::user()->name}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{url('public/images/5.jpg')}}" class="img-circle" alt="User Image">

                            <p>
                           
                                {{Auth::user()->name}}

                                <small>Role</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            {{-- <div class="pull-left">
                                <a href="#" class="btn btn-info btn-flat">Profile</a>
                            </div> --}}
                            <div class="pull-right">
                                <a href="{{route('logout')}}" class="btn btn-danger btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <!-- <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li> -->
            </ul>
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- <div class="user-panel">
            <div class="pull-left image">
                <img src="{{url('public/images/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Creatu Developers</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div> -->
        <!-- search form -->
        {{-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form> --}}
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="{{url('/admin')}}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li class="header">Admin</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Admin</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    {{-- <li class="active"><a href="{{url('/add-new-admin')}}"><i class="fa fa-circle-o"></i>Add New Admin</a></li> --}}
                    <li><a href="{{url('/view-all-admin')}}"><i class="fa fa-circle-o"></i>View All Admin</a></li>
                </ul>
            </li>

             <!-- <li class="header">Carousel</li> -->
            
            <li class="header">About</li>
            <li class="treeview">
                    
                <a href="{{url('/abouts-view')}}"><i class="fa fa-home"></i>View About </a></li>
                    
            </li>

            <li class="treeview">
                <a href="{{url('/service-view')}}">
                    <i class="fa fa-list-alt"></i> <span>Services</span>
                    
                </a>
                
            </li>

            <li class="treeview">
                <a href="{{url('/team-view')}}">
                    <i class="fa fa-users"></i> <span>Teams</span>
                    
                </a>
                
            </li>

            <li class="treeview">
                <a href="{{url('/location-view')}}">
                    <i class="fa fa-map-marker"></i> <span>Location</span>
                    
                </a>
                
            </li>

            
            <li class="header">Gallery</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-picture-o"></i> <span>Gallery</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/album-add')}}"><i class="fa fa-circle-o"></i>Add Album</a></li>
                    <li><a href="{{url('/album-view')}}"><i class="fa fa-circle-o"></i>View Album </a></li>
                </ul>
            </li>
            
            <!-- <li class="header">Service</li> -->
        
<!-- 
                <li class="header">Teams</li> -->
            
            
            <li class="header">Blogs</li>
            <li class="treeview">
                <a href="{{url('/blog-view')}}">
                    <i class="fa fa-list-alt"></i> <span>Blog</span>
                    
                </a>
                
            </li>
            <li class="header">FAQ</li>
            <li class="treeview">
                <a href="{{url('/faq-view')}}">
                    <i class="fa fa-question-circle"></i> <span>FAQ</span>
                    
                </a>
                
            </li>



            <li class="header">Message  And Appointment </li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope"></i> <span>Message</span>

                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                 
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/viewcontact')}}"><i class="fa fa-circle-o"></i>View Inbox</a></li>
                    <li><a href="{{url('/replies')}}"><i class="fa fa-circle-o"></i>View Reply</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope"></i> <span>Appointment</span>

                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                 
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/view-appointment')}}"><i class="fa fa-circle-o"></i>View Appointment</a></li>
                    <li><a href="{{url('/appointment-replies')}}"><i class="fa fa-circle-o"></i>View Appointment Reply</a></li>
                </ul>
            </li>

            <li class="header">Others</li>
            <li class="treeview">
                <a href="{{url('/seo-view')}}">
                    <i class="fa fa-circle"></i> <span>SEO</span>
                    
                </a>
                
            </li>
             



                              

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>