<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- favicon here --}}

    @include('visitor.partials.links')
</head>

<body>
    @include('visitor.partials.header')

    @yield('page-content')

    @include('visitor.partials.footer')

    @include('visitor.partials.scripts')
</body>

</html>
