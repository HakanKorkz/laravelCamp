<!doctype html>
<html class="no-js " lang="{{ str_replace("-","-",app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>{{ config("app.name","Blog") }}</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset("assets/admin/images") }}/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset("assets/admin/plugins") }}/bootstrap/css/bootstrap.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset("assets/admin/css") }}/style.min.css">
</head>
<body class="theme-blush">

<!-- Page Loader -->
@include("admin.components.loader")

<!-- Overlay For Sidebars -->
@include("admin.components.overlay")

<!-- Main Search -->
@include("admin.components.search")

<!-- Right Icon menu Sidebar -->
@include("admin.components.navbar-right")

<!-- Left Sidebar -->
@include("admin.components.left-sidebar")
<!-- Right Sidebar -->
@include("admin.components.right-sidebar")
<!-- Main Content -->
@yield("admin")
<!-- Main Content -->

<!-- Jquery Core Js -->
<script src="{{ asset("assets/admin/bundles") }}/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{ asset("assets/admin/bundles") }}/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="{{ asset("assets/admin/bundles") }}/mainscripts.bundle.js"></script>
</body>
</html>
