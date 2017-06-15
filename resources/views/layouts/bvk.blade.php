<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
</html>
@include('components.head')
<body>
@include('components.header')
@yield('content')
@include('components.footer')
@include('components.scripts')
</body>
