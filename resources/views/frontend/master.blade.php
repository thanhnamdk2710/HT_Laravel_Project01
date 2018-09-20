<!DOCTYPE html>
<html>
<head>
	<title>EBOOK-@yield('title')</title>
	<base href="{{asset('')}}">  
    @include('frontend.layouts.head')
    @stack('css')
</head>
<body>
    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')
</body>
</html>
