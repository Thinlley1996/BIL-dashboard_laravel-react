<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="csrf-token" name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Bhutan Insurance Limited | Admin "</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="https://www.bhutaninsurance.com.bt/img/logo.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="https://www.bhutaninsurance.com.bt/img/logo.png"
    />
    <link href="{{ asset('assets/global/iziToast/css/iziToast.css') }}" rel="stylesheet">
    @yield('styles')
  </head>
  <body>
    <div class="container-scroller">
      @include('user.layout.partials._navbar')
      <div class="container-fluid page-body-wrapper">
        @include('user.layout.partials._sidebar')
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('container')
          </div>
          @include('user.layout.partials._footer')
        </div>
      </div>
    </div>
    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    
    <!-- inject:js -->
    <script src="{{asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets/js/misc.js')}}"></script>
    <script src="{{ asset('assets/global/iziToast/js/iziToast.js') }}"></script>
    @include('global_script')
    @yield('scripts')
    <!-- endinject -->
    @include('user.layout.partials._toaster-message')
  </body>
</html>