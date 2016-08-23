<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
    @include('layouts.nav-sidebar')

    <div class="stage" id="stage" style="padding-top: 75px;">

        @include('layouts.nav-normal')

        @yield('content')

        @include('layouts.footer')

    </div>

    @include('layouts.footer-scripts')

</body>
</html>
