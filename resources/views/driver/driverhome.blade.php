<!DOCTYPE html>
<html>
  <head> 
    @include('driver.css')
  </head>
  <body>
        @include('driver.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->

      @include('driver.sidebar')
      <!-- Sidebar Navigation end-->
      
      @include('driver.body')

        @include('driver.footer')
  </body>
</html>

