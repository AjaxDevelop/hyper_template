<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- third party css -->
    <link href="{{ asset('assets/css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style"/>

    @stack('css')

    <!-- Base URL -->
    <script>
        assetBaseUrl = "<?php echo e(asset('')); ?>";
        assetApiBaseUrl = "<?php echo e(asset('api')); ?>";
    </script>

</head>
<body class="loading" data-layout-color="light" data-leftbar-theme="dark" data-layout-mode="fluid" data-rightbar-onstart="true">

    @guest()
        <div class="main-content">
            @yield('content')
        </div>
    @endguest

    @auth()
        <div class="wrapper">
            @include('layouts.navbars.sidebar')
            <div class="content-page">
                <div class="content">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @include('layouts.navbars.topbar')

                    @yield('content')

                    @include('layouts.footers.auth')

                </div>
            </div>
        </div>

        @include('layouts.navbars.rightbar')

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->

        <!-- bundle -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
        <script src="{{ asset('assets/js/app.min.js') }}"></script>

        <!-- Apex js -->
        <script src="{{ asset('assets/js/vendor/apexcharts.min.js') }}"></script>

        <!-- Todo js -->
        <script src="{{ asset('assets/js/ui/component.todo.js') }}"></script>

        <!-- demo app -->
        <script src="{{ asset('assets/js/pages/demo.crm-dashboard.js') }}"></script>
        <!-- end demo js-->

    @endauth

    @stack('js')

</body>
</html>
