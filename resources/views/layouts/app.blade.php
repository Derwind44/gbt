<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!--<< Header Area >>-->
    @include('layouts.partials.head')
    <body class="body-bg">

       <!-- Preloader Start -->
       @include('layouts.partials.preloader')

       <!--<< Mouse Cursor Start >>-->
       <div class="mouse-cursor cursor-outer"></div>
       <div class="mouse-cursor cursor-inner"></div>

       <!-- Back To Top start -->
       <button id="back-top" class="back-to-top">
           <i class="fa-regular fa-arrow-up"></i>
       </button>

       <!-- Offcanvas Area Start -->
       @include('layouts.partials.offcanvas')

       <!-- Header Section Start -->
       @include('layouts.partials.header')

       <!-- Main Content -->
       <main>
           @yield('content')
       </main>

       <!-- Footer Section -->
       @include('layouts.partials.footer')

       <!-- Scripts -->
       @include('layouts.partials.scripts')
    </body>
</html>
