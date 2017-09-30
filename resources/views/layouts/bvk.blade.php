<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@include('components.head')
<body>
@include('components.header')
@include('components.nav')
@yield('content')
@include('components.footer')
@include('components.scripts')
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script type="text/javascript" src="{{ asset('dist/scripts/main.js') }}"></script>
</body>
</html>
