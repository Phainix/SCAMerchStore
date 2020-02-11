<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    @section('header')
        <header>
            This is the header section
        </header>
    @show
    <div class="container">
        @yield('content')
    </div>
</body>
</html>