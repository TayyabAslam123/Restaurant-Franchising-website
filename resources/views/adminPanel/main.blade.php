<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard</title>
    {{-- <link rel="icon" href="{{asset('img/logo.png')}}" type="image" sizes="18x18"> --}}
    <!-- Custom fonts for this template-->
    <link href="{{URL::to('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css"
    <link href="{{URL::to('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{URL::to('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <!--HIGH CHARTS-->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
  </head>
  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper" style="background-color: rgb(43, 91, 235);">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/adminpanel')}}">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <img src="{{asset('img/logo.png')}}" style="background-color: white;" width="100%" height="300%">
      </a>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/adminpanel') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
     
      @foreach (adminMenu() as $key=>$value)
          

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url($value)}}">
        <span>{{$key}}</span>
        </a>
      </li>
  
      @endforeach
      <!-- Nav Item - Tables -->
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
    <!-- Topbar -->
    <div id="app" >
      <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color:#4e73df;">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">
         <p style="color: white;"> ADMIN PANEL</p>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
            </ul>
            <!-- Right Side Of Navbar -->
       
          <a href="{{url('/logout')}}">
            <button class="btn btn-danger btn-lg">
              LOGOUT
            </button>
          </a> 
          </div>
        </div>
      </nav>
      <!-- End of Topbar -->
      <!-- Begin Page Content -->
      <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">
        </div>
        <br>
        <!----MAIN CONTENT---->
        @yield('content')
        <!----End of Main Content---->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{URL::to('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{URL::to('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{URL::to('admin/js/sb-admin-2.min.js')}}"></script>
    <!-- Page level plugins -->
    <script src="{{URL::to('admin/vendor/chart.js/Chart.min.js')}}"></script>
    <!-- Page level custom scripts -->
    <script src="{{URL::to('admin/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{URL::to('admin/js/demo/chart-pie-demo.js')}}"></script>
  </body>
</html>
