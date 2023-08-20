<!DOCTYPE html>
<html>

<head>
    <title>@yield('title') &mdash; Flutter</title>
    @include('components.head')
</head>

<body @stack('class')>
    @yield('auth')

    @include('components.foot')
    @stack('scrypt')
</body>

</html>
