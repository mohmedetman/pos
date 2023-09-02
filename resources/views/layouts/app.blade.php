<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Dot CMS</title>

    <!-- Google Font: Source Sans Pro -->
{{--    <link rel="stylesheet"--}}
{{--        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">--}}
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}admin/plugins/flag-icon-css/css/flag-icon.min.css">
    <!-- Ionicons -->
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    @if(App::getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('admin/rtl/bootstrap_v4.2.1_css_bootstrap.min.css')}}">
        <link rel="stylesheet" media="screen" href="{{ asset('admin/rtl/droid-arabic-kufi.css') }}" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('admin/rtl/custom.css')}}">
    @endif

    @stack('css-style')
    <style>
        .error{
            color: red;
            border-color: red;
            font-weight:100 !important;
        }
        [class*=sidebar-dark-] .nav-sidebar>.nav-item.menu-open>.nav-link, [class*=sidebar-dark-] .nav-sidebar>.nav-item:hover>.nav-link, [class*=sidebar-dark-] .nav-sidebar>.nav-item>.nav-link:focus {
            background-color: #2D6AD9 !important;
            color: #fff;
        }
        .brand-image-xs {
            float: left;
            line-height: .8;
            margin-left: 0.8rem;
            margin-right: 0.5rem;
            margin-top: -3px;
            max-height: 36px;
            width: 70%;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('partials.header')
        @include('partials.sidebar')
        <div class="content-wrapper">
            @yield('content')
        </div>
        @include('partials.footer')
        <!-- jQuery -->
        <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('/') }}admin/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        @if(App::getLocale() == 'ar')
            <script src="{{ asset('admin/rtl/bootstrap_v4.2.1_js_bootstrap.min.js')}}"></script>
        @endif
        <!-- Bootstrap 4 -->
        <script src="{{ asset('/') }}admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="{{ asset('/') }}admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- Page specific script -->
        @stack('js')
        <!-- AdminLTE App -->
        <script src="{{ asset('/') }}admin/dist/js/adminlte.js"></script>
    </div>
</body>

</html>