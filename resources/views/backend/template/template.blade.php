
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('backend.includes.css')
    
  </head>

  <body>
  @include('backend.includes.left')
  @include('backend.includes.top')


    @yield("content")


  @include('backend.includes.script')
  </body>
</html>
