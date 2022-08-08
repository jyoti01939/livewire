<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no')}}">
  <title>Regal Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{ url('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ url('admin/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{ url('admin/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ url('admin/vendors/flag-icon-css/css/flag-icon.min.css')}}"/>
  <link rel="stylesheet" href="{{ url('admin/vendors/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ url('admin/vendors/jquery-bar-rating/fontawesome-stars-o.css')}}">
  <link rel="stylesheet" href="{{ url('admin/vendors/jquery-bar-rating/fontawesome-stars.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ url('admin/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ url('admin/images/favicon.png')}}" />
  @livewireStyles
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.partials.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.partials.sidebar')
      <!-- partial -->
     @yield('content')
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="{{ url('admin/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ url('admin/js/off-canvas.js')}}"></script>
  <script src="{{ url('admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{ url('admin/js/template.js')}}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{ url('admin/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{ url('admin/vendors/jquery-bar-rating/jquery.barrating.min.js')}}"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{ url('admin/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
  @livewireScripts
</body>

</html>

