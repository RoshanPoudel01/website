<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Digital Health Nepal</title>
    <link rel="icon" href="{{ asset('assets/image/logo.png') }}" type="image/icon type">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    {{-- <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}"> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/library/bxslider/jquery.bxslider.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/library/fontAwesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/library/bootstrap/css/bootstrap.css')}}">

    <script src="{{asset('assets/js/jquery-2.2.2.min.js')}}"></script>
</head>

@include('includes.navbar')
@yield('content')

<!-- jQuery -->
{{-- <script src="../../plugins/jquery/jquery.min.js"></script> --}}
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
@include('includes.footer')

</html>
