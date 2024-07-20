<!DOCTYPE html>
<html lang="en">
    @include('layouts.client.head')

<body>
    @include('layouts.client.header')
    @yield('content')
    @include('layouts.client.footer')
    @include('layouts.client.script')
</body>

</html>