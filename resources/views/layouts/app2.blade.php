
<!DOCTYPE html>
<html lang="en" dir="horizontal">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('material/images/favicon.png') }}">
    <title>Material Pro Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    @yield('style')
    <link href="{{ asset('material/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{ asset('material/plugins/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{ asset('material/plugins/chartist-js/dist/chartist-init.css')}}" rel="stylesheet">
    <link href="{{ asset('material/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <link href="{{ asset('material/plugins/css-chart/css-chart.css')}}" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="{{ asset('material/plugins/c3-master/c3.min.css')}}" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="{{ asset('material/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('material/css/style.css') }}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('material/css/colors/red.css') }}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border logo-center">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('material/images/logo-icon.png') }}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{ asset('material/images/logo-light-icon.png') }}" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                         <!-- dark Logo text -->
                         <img src="{{ asset('material/images/logo-text.png') }}" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->
                         <img src="{{ asset('material/images/logo-light-text.png') }}" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        &nbsp;<a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('material/images/owl.png') }}" alt="user" class="profile-pic" /></a>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><font color="white">&nbsp;Welcome, Mahasiswa</font></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <a href=""><i class="fa fa-user"></i> Profile </a>
                                    </li>
                                    {{-- <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li> --}}
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);" onclick="$(this).find('form').submit();"><i class="fa fa-power-off"></i> Logout <form action="{{ route('postLogout') }}" method="POST">
                                    </form></a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Language -->
                        <!-- ============================================================== -->
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-us"></i></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up"> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-in"></i> India</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> China</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> Dutch</a> </div>
                        </li> --}}
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav active">
                    @if(Sentinel::getUser()->roles()->first()->slug == 'superAdmin')
                    <ul id="sidebarnav" class="in">
                        <li class="nav-small-cap">SUPERADMIN</li>
                        <li>
                            <a href="{{ route('superAdmin.dashboard') }}" aria-expanded="false"><i class="fa fa-home"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Admin</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Tambah Admin</a></li>
                                <li><a href="#">List Admin</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">IUPOP</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Tambah IUPOP</a></li>
                                <li><a href="#">List IUPOP</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Bapenda</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Tambah Bapenda</a></li>
                                <li><a href="#">List Bapenda</a></li>
                            </ul>
                        </li>
                    </ul>
                @elseif(Sentinel::getUser()->roles()->first()->slug == 'admin')
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">Admin</li>
                        <li>
                            <a href="{{ route('admin.dashboard')}}" aria-expanded="false"><i class="fa fa-dashboard"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Katalog Buku</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Tambah Buku Baru</a></li>
                                <li><a href="#">List Buku</a></li>

                            </ul>
                        </li>
                        {{-- <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-circle"></i><span class="hide-menu">Patient</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a class="has-arrow " href="#" aria-expanded="false"><span class="hide-menu">Add Patient</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                    <li><a href="{{ route('admin.patient.createchild')}}">Child</a></li>
                                    <li><a href="{{ route('admin.patient.createadult')}}">Adult</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow " href="#" aria-expanded="false"><span class="hide-menu">List Patient</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                    <li><a href="{{ route('admin.patient.listchild')}}">List Patient Child</a></li>
                                    <li><a href="{{ route('admin.patient.listadult')}}">List Patient Adult</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> --}}
                    </ul>
                @elseif(Sentinel::getUser()->roles()->first()->slug == 'mahasiswa')
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">MAHASISWA</li>
                        <li>
                            <a href="{{ route('mahasiswa.dashboard')}}" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Home</span></a>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-eye"></i><span class="hide-menu">Review & Rating Books</span></a>
                            {{-- <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('mahasiswa.recommend.form')}}">Rekomendasi Baru</a></li>
                                <li><a href="{{ route('mahasiswa.recommend.list')}}">List Rekomendasi</a></li>

                            </ul> --}}
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-check-square-o "></i><span class="hide-menu">Vote Books</span></a>
                            {{-- <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('mahasiswa.vote.show')}}">Voting Buku Baru</a></li>
                                <li><a href="{{ route('mahasiswa.vote.list')}}">List Voting Saya</a></li>
                            </ul> --}}
                        </li>
                        <li>
                            <a class="has-arrow " href="{{ route('mahasiswa.leaderboard.index')}}" aria-expanded="false"><i class="ti-cup"></i><span class="hide-menu">Leaderboard</span></a>
                        </li>
                    </ul>
                @else
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">PHARMACIST</li>
                        <li>
                            <a href="{{route('pharmacist.dashboard')}}" aria-expanded="false"><i class="fa fa-home"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-heartbeat"></i><span class="hide-menu">Diagnosis</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('pharmacist.diagnosis.update')}}">Update Diagnosis</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-th"></i><span class="hide-menu">Prescription</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('pharmacist.prescription.confirm')}}">Confirm Prescription</a></li>
                                <li><a href="{{route('pharmacist.prescription.list')}}">Prescription List</a></li>
                            </ul>
                            {{-- <a href="{{route('pharmacist.receipt.list')}}" aria-expanded="false"><i class="fa fa-circle"></i><span class="hide-menu">Prescription</span></a> --}}
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-circle"></i><span class="hide-menu">Medicine</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('pharmacist.medicine.add')}}">Add Medicine</a></li>
                                <li><a href="{{ route('pharmacist.medicine.list')}}">List Medicine</a></li>
                            </ul>
                        </li>
                    </ul>
                @endif
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
               <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    @yield('breadcumb')
                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    @yield('content')
                    <!-- ============================================================== -->
                    <!-- End PAge Content -->
                    <!-- ============================================================== -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2019 Open Library
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <script src="{{ asset('material/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('material/plugins/popper/popper.min.js') }}"></script>
    <script src="{{ asset('material/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('material/js/jquery.slimscroll.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('material/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('material/js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('material/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('material/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('material/js/custom.min.js') }}"></script>

    <script src="{{ asset('material/plugins/d3/d3.min.js') }}"></script>
    <script src="{{ asset('material/plugins/c3-master/c3.min.js') }}"></script>
    @yield('script')
</body>

</html>
