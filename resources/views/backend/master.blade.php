{{-- Header --}}
@include('backend.layouts.header')

        <!--sidebar wrapper -->
        @include('backend.layouts.sidebar')
        <!--end sidebar wrapper -->
        <!--start header -->
        @include('backend.layouts.topbar')
        <!--end header -->

        <!--start page wrapper -->
        @yield('main-content')
        <!--end page wrapper -->

      
{{-- Footer --}}
@include('backend.layouts.footer')