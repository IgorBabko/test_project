<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @include ('partials.styles')
</head>
<body id="app-layout">

    @include ('partials.nav')

    @include ('partials.flash')

    @yield('content')

    @include ('partials.scripts')
</body>
</html>
