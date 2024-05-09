<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- includo l'heder da partials --}}
    @include('partials.header')

    <main>

        {{-- con lo @yield aggiungiamo il main dsa home --}}
        @yield('content')

    </main>

    {{-- includo il footer da partials --}}

    @include('partials.footer')
</body>
</html>
