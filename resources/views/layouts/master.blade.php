<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 19</title>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <script src="{{asset('/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('/js/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js')}}"></script>
  </head>
  <body>
    <div class="container">
      <div class="page-header">
        @yield('header')
      </div>
      @if (Session::has('success'))
        <div class="alert alert-success">
          {{ Session::get('success') }}
        </div>
      @endif
      @yield('content')
    </div>
  </body>
</html>
