<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('assets/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/vendors/css/vendor.bundle.addons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('assets/admin/images/favicon.png')}}" />
</head>
<body>
<div class="container-scroller">

    @include('theme.admin.navbar')
    <div class="container-fluid page-body-wrapper">
        @include('theme.admin.sidebar')
        <div class="main-panel">
            @yield('main')
            @include('theme.admin.footer')
        </div>
    </div>

</div>
<!-- plugins:js -->
  <script src="{{asset('assets/admin/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('assets/admin/vendors/js/vendor.bundle.addons.js')}}"></script>
  <script src="{{asset('assets/admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('assets/admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('assets/admin/js/misc.js')}}"></script>
  <script src="{{asset('assets/admin/js/settings.js')}}"></script>
  <script src="{{asset('assets/admin/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('assets/admin/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
</body>
</html>