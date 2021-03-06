<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ $the_title or 'BVK | Byggfirma' }}</title>
  <meta property="og:url" content="http://www.bvk.se" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="BVK" />
  <meta property="og:description" content="" /> <!-- Description of page -->
  <meta property="og:image" content="" /> <!-- Image to show with description -->
  <meta name="keywords" content=""> <!-- Keywords, separate with blanks -->
  <link rel="icon" href="{{ Storage::url('other/favicon.png') }}"> <!-- favicon.ico -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- jQuery -->
  <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous">
  </script>

  <!-- Slick Carousel -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>

  <!-- Styles -->
  <link rel="stylesheet" type="text/css" href="{{ asset('dist/styles/main.css') }}">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>
</head>
