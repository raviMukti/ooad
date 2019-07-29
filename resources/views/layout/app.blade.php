<!doctype html>
<html lang="en">
  <head>
    @include('inc.head')
    @stack('style')
    @stack('script')
  </head>
  <body>
    @include('inc.nav')
        @yield('content')
    @include('inc.footer')
    @stack('script')
  </body>
</html>
