<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->



<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- head -->
    @include('seller.particals.head')
    <!-- head end-->
    <body>
    <section id="container">
        <!--header start-->
    @include('seller.particals.header')
    <!--header end-->

        <!--sidebar start-->
    @include('seller.particals.sidebar')
    <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
    @yield('content')
    <!-- footer -->
    @include('seller.particals.footer')
    <!-- / footer -->
        </section>
        <!--main content end-->

    </section>


    <!-- main-js-->
    @include('seller.particals.main-js')
    <!-- main-js end-->
</body>
</html>
