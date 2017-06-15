<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ $the_title or 'BVK' }}</title>
  <meta property="og:url" content="http://www.eaudestrateg.se" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="BVK" />
  <meta property="og:description" content="" /> <!-- Description of page -->
  <meta property="og:image" content="" /> <!-- Image to show with description -->
  <meta name="keywords" content=""> <!-- Keywords, separate with blanks -->
  <link rel="icon" href="{{ asset('dist/images/favicon.ico') }}"> <!-- favicon.ico -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Styles -->
  <link rel="stylesheet" type="text/css" href="{{ asset('dist/styles/main.css') }}">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</head>
