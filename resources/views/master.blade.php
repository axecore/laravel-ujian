<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body>
  <div class="container-scroller">

    @include('components.navbar')

    <div class="container-fluid page-body-wrapper">
    
        {{-- @include('components.settinglayouts') --}}

        @include('components.sidebar')

      <div class="main-panel">
        <div class="content-wrapper">
            @yield('content')
        </div>
       
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022 DEMO APP.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <a href="https://t.me/axecore" target="__blank"><i class="ti-heart text-danger ml-1"> Me</i></a></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <script src="{{ asset('template/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('template/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('template/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('template/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('template/js/dataTables.select.min.js') }}"></script>
  <script src="{{ asset('template/js/off-canvas.js') }}"></script>
  <script src="{{ asset('template/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('template/js/template.js') }}"></script>
  <script src="{{ asset('template/js/settings.js') }}"></script>
  <script src="{{ asset('template/js/todolist.js') }}"></script>
  <script src="{{ asset('template/js/dashboard.js') }}"></script>
  <script src="{{ asset('template/js/Chart.roundedBarCharts.js') }}"></script>
</body>

</html>