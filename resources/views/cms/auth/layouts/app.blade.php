<!DOCTYPE html>
<html lang="en">
  <head>
    @include('cms.auth.layouts.partials.head')
  </head>
  <body>
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center"><img src="{{ asset('assets-login/imgs/template/loading.gif') }}" alt="Loading"></div>
        </div>
      </div>
    </div>

    <main class="main">
    @yield('content-auth')
    </main>

    @include('cms.auth.layouts.partials.foot')
  </body>
</html>
