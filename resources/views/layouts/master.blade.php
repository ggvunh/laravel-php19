<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 19</title>
    <script src="{{asset('/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('/js/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <script src="{{asset('/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/bower_components/bootstrap-waitingfor/build/bootstrap-waitingfor.js')}}"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  </head>
  <body>
    {!! Toastr::render() !!}
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
  <script>
      function showWating() {
        waitingDialog.show('Loading...');
      }
  </script>
</html>
