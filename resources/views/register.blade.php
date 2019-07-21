<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('material/images/Logo.png')}}">
    <title>Open Library</title>
    <!-- Bootstrap Core CSS -->
    {{--  <link href="../material/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">  --}}
    <link href="{{ asset('material/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('material/css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('material/css/colors/megna.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
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
        <section id="wrapper" class="login-register login-sidebar"  style="background-image:url({{ asset('material/images/background/library.jpg')}});">
      <div class="login-box card">
        <div class="card-body">
          <form class="form-horizontal form-material" id="loginform" method="POST" action="{{route('postRegister') }}">
            <a href="javascript:void(0)" class="text-center db"><img src="{{ asset('material/images/openlib.png')}}" alt="Home"/><br/></a>
            <CENTER><h2>REGISTRATION</h2></CENTER>
            <div class="form-group m-t-20">
              <div class="col-xs-12">
                <input class="form-control" type="text" required="" placeholder="Name" name="name">
              </div>
            </div>
            <div class="form-group">
                Gender
                <div class="col-xs-12">
                    <label class="custom-control custom-radio">
                        <input id="radio5" name="gender" type="radio" class="custom-control-input" value="Male">
                        <span class="custom-control-label">Male</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input id="radio6" name="gender" type="radio" class="custom-control-input" value="Female">
                        <span class="custom-control-label">Female</span>
                    </label>
                </div>
            </div>
            <div class="form-group ">
              <div class="col-xs-12">
                <input class="form-control" type="text" required="" placeholder="Email" name="email">
              </div>
            </div>
            <div class="form-group ">
                <div class="col-xs-12">
                    <input class="form-control" type="text" required="" placeholder="Faculty" name="faculty">
                </div>
            </div>
            <div class="form-group ">
                <div class="col-xs-12">
                    <input class="form-control" type="text" required="" placeholder="Username" name="username">
                </div>
            </div>
            <div class="form-group ">
              <div class="col-xs-12">
                <input class="form-control" type="password" required="" placeholder="Password" name="password">
              </div>
            </div>
            <div class="form-group text-center m-t-20">
              <div class="col-xs-12">
                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" style="background-color:#BD0210">Sign Up</button>
              </div>
            </div>
            <div class="form-group m-b-0">
              <div class="col-sm-12 text-center">
                <p>Already have an account? <a href="{{route('login')}}" class="text-info m-l-5"><b>Sign In</b></a></p>
              </div>
            </div>
          </form>
        </div>
      </div>
</section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('material/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('material/plugins/popper/popper.min.js')}}"></script>
    <script src="{{ asset('material/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('material/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('material/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('material/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{ asset('material/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{ asset('material/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('material/js/custom.min.js')}}"></script>

    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->

    {{--  <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>  --}}

    <script src="{{ asset('material/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>

</body>

</html>
