<!DOCTYPE html>
<html>
<head>
	<title>EBOOK - @yield('title')</title>
    @include('user.layouts.head')
</head>
<body>
    @include('user.layouts.header')
    @yield('content')
    @include('user.layouts.footer')
</body>
</html>