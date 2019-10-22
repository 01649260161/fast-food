<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->



<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- head -->
    @include('shipper.particals.head')
    <!-- head end-->
    <body>
    <section id="container">
        <!--header start-->
    <!--header end-->

        <!--sidebar start-->
    <!--sidebar end-->
        <!--main content start-->

    @yield('content')
    <!-- footer -->
    <!-- / footer -->

        <!--main content end-->

    </section>


    <!-- main-js-->
    @include('shipper.particals.main-js')
    <!-- main-js end-->
</body>
</html>
