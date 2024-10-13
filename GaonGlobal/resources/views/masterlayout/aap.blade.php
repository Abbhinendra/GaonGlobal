<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','GaonGlobal - Home')</title>
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @stack('css')
</head>
<body>
{{-- navbar --}}
@includeIf('pagesection.navbar')
{{-- main content here --}}
@yield('content')
</body>
@stack('js')
<script src="{{asset('js/main.js')}}"></script>
</html>
