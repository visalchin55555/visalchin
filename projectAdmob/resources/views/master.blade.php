<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <title>Project Admob</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- C3 charts css -->
    <link href="assets/plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />

    <!-- App css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/components.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    @yield('css')
    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>

</head>


<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <!--<a href="index.html" class="logo"><span>Code<span>Fox</span></span><i class="mdi mdi-layers"></i></a>-->
                <!-- Image logo -->
                <a href="index.html" class="logo">
                            <span>
                                <img src="{{asset('assets/images/logo.png')}}" alt="" height="25">
                            </span>
                    <i>
                        <img src="{{asset('assets/images/logo_sm.png')}}" alt="" height="28">
                    </i>
                </a>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">

                    <!-- Navbar-left -->
                    <ul class="nav navbar-nav navbar-left nav-menu-left">
                        <li>
                            <button type="button" class="button-menu-mobile open-left waves-effect">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                    </ul>

                    <!-- Right(Notification) -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden-xs">
                            <form role="search" class="app-search">
                                <input type="text" placeholder="Search..."
                                       class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                        <li>
                            <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                <i class="dripicons-bell"></i>
                                <span class="badge badge-pink">4</span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right dropdown-lg user-list notify-list">
                                <li class="list-group notification-list m-b-0">
                                    <div class="slimscroll">
                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left p-r-10">
                                                    <em class="fa fa-diamond bg-primary"></em>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading text-primary">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        There are new settings available
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left p-r-10">
                                                    <em class="fa fa-cog bg-warning"></em>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading text-warning">New settings</h5>
                                                    <p class="m-0">
                                                        There are new settings available
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left p-r-10">
                                                    <em class="fa fa-bell-o bg-custom"></em>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading text-custom">Updates</h5>
                                                    <p class="m-0">
                                                        There are <span class="text-primary font-600">2</span> new updates available
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left p-r-10">
                                                    <em class="fa fa-user-plus bg-danger"></em>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading text-danger">New user registered</h5>
                                                    <p class="m-0">
                                                        You have 10 unread messages
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left p-r-10">
                                                    <em class="fa fa-diamond bg-primary"></em>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading text-primary">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        There are new settings available
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left p-r-10">
                                                    <em class="fa fa-cog bg-warning"></em>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading text-warning">New settings</h5>
                                                    <p class="m-0">
                                                        There are new settings available
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <!-- end notification list -->
                            </ul>
                        </li>

                        <li class="dropdown user-box">
                            <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="user-img" class="img-circle user-img">
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                <li><a href="javascript:void(0)">Profile</a></li>
                                <li><a href="javascript:void(0)"><span class="badge badge-info pull-right">4</span>Settings</a></li>
                                <li><a href="javascript:void(0)">Lock screen</a></li>
                                <li class="divider"></li>
                                <li><a href="javascript:void(0)">Logout</a></li>
                            </ul>
                        </li>

                    </ul> <!-- end navbar-right -->

                </div><!-- end container -->
            </div><!-- end navbar -->
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metisMenu nav" id="side-menu">
                        <li>
                            <a href="javascript: void(0);" aria-expanded="true"><i class="fi-target"></i> <span> Post </span> <span class="menu-arrow"></span></a>
                            <ul class="nav-second-level nav" aria-expanded="true">
                                <li><a href="{!! url('post') !!}">View All Post</a></li>
                                <li><a href="{!! url('post/create')!!}">Add New Post</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="true"><i class="fi-target"></i> <span> Category </span> <span class="menu-arrow"></span></a>
                            <ul class="nav-second-level nav" aria-expanded="true">
                                <li><a href="{!! url('category') !!}">View All Catergory</a></li>
                                <li><a href="{!! url('category/create') !!}">Add New Category</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="true"><i class="fi-target"></i> <span> Media </span> <span class="menu-arrow"></span></a>
                            <ul class="nav-second-level nav" aria-expanded="true">
                                <li><a href="{!! url('media') !!}">View All Gallary</a></li>
                                <li><a href="{!! url('media/create') !!}">Add New Photo</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="true"><i class="fi-target"></i><span> User </span> <span class="menu-arrow"></span></a>
                            <ul class="nav-second-level nav" aria-expanded="true">
                                <li><a href="{!! url('user') !!}">View All User</a></li>
                                <li><a href="{!! url('user/create') !!}">Add New User</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="true"><i class="fi-target"></i><span> Navigation </span> <span class="menu-arrow"></span></a>
                            <ul class="nav-second-level nav" aria-expanded="true">
                                <li><a href="{!! url('nav') !!}">View All Navigation</a></li>
                                <li><a href="{!! url('nav/create') !!}">Add New Navigation</a></li>
                            </ul>
                        </li>



                    </ul>

                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                @yield('content')

            </div> <!-- content -->

            <footer class="footer text-right">
                2017 © Visal. - Coderthemes.com
            </footer>

        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->



    <!-- jQuery  -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>

    <!-- Counter js  -->
    <script src="{{asset('assets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/plugins/counterup/jquery.counterup.min.js')}}"></script>

    <!--C3 Chart-->
    <script type="text/javascript" src="{{asset('assets/plugins/d3/d3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/c3/c3.min.js')}}"></script>

    <!--Echart Chart-->
    <script src="{{asset('assets/plugins/echart/echarts-all.js')}}"></script>



    <!-- Dashboard init -->
    <script src="{{asset('assets/pages/jquery.dashboard.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/jquery.core.js')}}"></script>
    <script src="{{asset('assets/js/jquery.app.js')}}"></script>
    @yield('js')

</body>
</html>