<!DOCTYPE html>
<html>
<head>
	<title>EBOOK-@yield('title')</title>
    @include('frontend.layouts.head')
</head>
<body>
    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')
    @yield('script')
</body>
</html>
