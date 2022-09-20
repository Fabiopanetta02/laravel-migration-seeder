<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('cdns')

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- JS --}}
    <script defer src="{{ asset('js/app.js') }}"></script>
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
</head>
<body>
    @include('includes.header')
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
</body>
</html>