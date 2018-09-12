<!DOCTYPE html>
<html>
<<<<<<< HEAD
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title') - EBOOK</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <base href="{{asset('')}}">
        @include('backend.layouts.partials.styles')
        @stack('css')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
=======
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') - EBOOK</title>
    <base href="{{asset('')}}">  
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    @include('backend.layouts.partials.styles')
    @stack('css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
>>>>>>> 67dc5b3dc5407f67b67344758d1b6cb6d11ac645
        @include('backend.layouts.partials.header')
        @include('backend.layouts.partials.menu-bar')
        <div class="content-wrapper">
            @yield('content')
        </div>
        @include('backend.layouts.partials.footer')
        @include('backend.layouts.partials.scripts')
        @stack('js')
    </div>
</body>
</html>
