<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@include('components.admin.head')
<body>
@include('components.admin.header')
@include('components.admin.message')
@yield('content')
<!--@include('components.admin.footer')-->
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script type="text/javascript" src="{{ asset('dist/scripts/main.js') }}"></script>
</body>
</html>
