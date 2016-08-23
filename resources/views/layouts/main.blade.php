<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
    @include('layouts.nav-sidebar')

    <div class="stage" id="stage">
        <div class="block block-inverse block-fill-height @yield('main.header.class')">

            @include('layouts.nav-transparent')

            @yield('main.header')
        </div>

        @yield('content')

        @include('layouts.footer')

    </div>

    @include('layouts.footer-scripts')

</body>
</html>
