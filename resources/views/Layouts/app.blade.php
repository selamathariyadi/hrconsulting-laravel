<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tittle')</title>
    @include('Includes.styles')
    @yield('styles2')
</head>

<body>
    {{-- navbar --}}
    @include('Includes.navbar')
    {{-- end navbar --}}
     {{-- conten --}}
     @yield('content')
      {{-- conten --}}
    @include('Includes.footer')
</body>
    @include('Includes.scripts')
</html>