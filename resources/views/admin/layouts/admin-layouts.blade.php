<!DOCTYPE html>
<html lang="en">
  <head>
    
    <!-- Header Section -->
    @include('admin.layouts.header')

  </head>
  <body>
    <div class="container-scroller">

        <!-- Sidebar Section -->
        @include('admin.layouts.sidebar')

        <div class="container-fluid page-body-wrapper">
        
        <!-- Navbar Section -->
        @include('admin.layouts.navbar')

        <div class="main-panel">
          <div class="content-wrapper">
            @section('content')
            @show
          </div>

        <!-- Footer Section -->
        @include('admin.layouts.footer')

  </body>
</html>