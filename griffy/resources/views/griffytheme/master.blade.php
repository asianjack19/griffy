<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>griffy</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="icon" href="../../assets/images/favicon.ico" sizes="64x64" />
  </head>
  <body>

    <div class="container-scroller">

      <!-- SIDEBAR -->
      @include('griffytheme.partials.sidebar')

      <div class="container-fluid page-body-wrapper">

        <!-- NAVBAR -->
        @include('griffytheme.partials.navbar')

        <div class="main-panel">

          {{-- MAIN CONTENT --}}
          <div class="content-wrapper">
            @yield('content')  
          </div>
      
          <!-- FOOTER -->
          @include('griffytheme.partials.footer')
          
        </div>
     
      </div>
      
    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>