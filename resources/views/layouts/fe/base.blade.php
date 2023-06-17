<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="@yield('title')">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="{{ env('APP_AUTHOR', 'Abdurrahman GM') }}">

    <title>{{ \Setting::getSetting()->title_web }}</title>

    <!-- Start CSS File -->
    @include('layouts.fe.css')
    <!-- End CSS File -->

</head>

{{-- <body oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;"> --}}
<body>

    <!-- ======= Header ======= -->
    @include('layouts.fe.header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('layouts.fe.sidebar')
    <!-- End Sidebar-->

    <!-- ======= Main ======= -->
    <main id="main" class="main mb-5">

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                <strong>{!! $message !!}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @yield('content')

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layouts.fe.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Start JS File -->
    @include('layouts.fe.js')

    <!-- End JS File -->

</body>

</html>
