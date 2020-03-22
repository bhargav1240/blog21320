<!DOCTYPE html>
<html>
<head>
    @include('layouts.partials.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" id="app">

  @include('layouts.partials.navbar')

  @include('layouts.partials.sidebar')

  @yield('content')
  
  @include('layouts.partials.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('layouts.partials.scripts')

</body>
</html>
