<!doctype html>
<html lang="en">
  <head>
      @include('Partials/_head')
  </head>
  <body>
    @include('Partials/_nav')

    <div class="container">
      @include('Partials/_message')
      @yield('content')
    
      @include('Partials/_footer')

    </div>

    @include('Partials/_scripts')

    @yield('scripts')
    
  </body>
</html>
