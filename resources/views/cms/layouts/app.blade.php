<!DOCTYPE html>
<html lang="en">

<head>
    @include('cms.layouts.partials.head')
</head>

<body>
    <!-- START Wrapper -->
    <div class="wrapper">

        <!-- ========== Topbar Start ========== -->
        <header class="topbar">
            @include('cms.layouts.partials.navbar')
        </header>
          <!-- ========== Topbar End ========== -->

          <!-- ========== App Menu Start ========== -->
          <div class="main-nav">
            @include('cms.layouts.partials.sidebar')
          </div>
          <!-- ========== App Menu End ========== -->

          <!-- ==================================================== -->
          <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">

            <!-- Start Container Fluid -->
            <div class="container-fluid">
                <!-- Start here.... -->
                @include('cms.layouts.alert')
                @yield('content')
            </div>
            <!-- End Container Fluid -->

            <!-- ========== Footer Start ========== -->
            <footer class="footer">
                @include('cms.layouts.partials.footer')
            </footer>
            <!-- ========== Footer End ========== -->

        </div>
        <!-- ==================================================== -->
        <!-- End Page Content -->
        <!-- ==================================================== -->
        @include('cms.layouts.partials.foot')

    </div>
    <!-- END Wrapper -->
</body>

</html>
