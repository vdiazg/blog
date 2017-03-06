<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield('title', 'Home') | Blog</title>
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.css') }}">
</head>
<body>
  <header>
    @include('front.template.partials.header')
  </header>
  <div class="container">
    @yield('content')
  </div>

  <script src="{{ asset('plugins/jquery/js/jquery-3.1.1.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
  @yield('js')
</body>
</html>
