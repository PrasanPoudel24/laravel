<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('admin/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    @include('adminlayout.adminheader')
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
        @include('adminlayout.adminsidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
         @yield('body') 
        </div>
      </div>
    </div>
      
  </div>
  @yield('script')
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('admin/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('admin/js/template.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('admin/js/file-upload.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>
