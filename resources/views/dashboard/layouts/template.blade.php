<!DOCTYPE html>
<html lang="en">
@include('dashboard.layouts.head')

<body>

  @include('dashboard.layouts.header')

  <div class="container-fluid mt-5">
    <div class="row">

      @include('dashboard.layouts.navbar')

      @yield('content')

    </div>
  </div>

  @include('dashboard.layouts.scripts')
</body>

</html>