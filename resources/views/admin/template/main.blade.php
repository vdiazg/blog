<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Default') | Panel de Administración</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.css') }}">
  </head>
  <body>

    <div class="container">
      @include('admin.template.partials.nav')
      @include('flash::message')
      @include('admin.template.partials.errors')
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">@yield('title')</div>
            <div class="panel-body">
              @yield('content')
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="{{ asset('plugins/jquery/js/jquery-3.1.1.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
    <script src="{{ asset('plugins/trumbowyg/trumbowyg.js') }}"></script>
    @yield('js')
  </body>
</html>
