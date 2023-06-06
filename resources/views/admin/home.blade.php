<x-app-layout>
this is an admin dashboard

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admin.css')
    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial -->
      @include('admin.sidebar')

      @include('admin.navbar')
      
      @include('admin.body')
        
      @include('admin.script')
  </body>
</html>