<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    @include('site.layouts.head')
</head>

<body>

    @if (App::getLocale() == 'ar')
        <div class="page-wrapper rtl">
    @else
      <div class="page-wrapper">
    @endif

       <!-- main-header -->
       @include('site.layouts.main-header')

       <!-- content -->
       @yield('content')

       <!-- footer -->
       @include('site.layouts.footer')

</div>

    <!-- footer-scripts -->
    @include('site.layouts.footer-scripts')

</body>
</html>
