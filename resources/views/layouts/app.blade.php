<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.tag_head')


<body>

    @include('partials.header')
    <!-- /#site_header -->

    @include('partials.jumbo')

    <main id="site_main">
        @yield('content')
    </main>
    <!-- /#site_main -->

    @include('partials.footer')
    <!-- /#site_footer -->

</body>

</html>