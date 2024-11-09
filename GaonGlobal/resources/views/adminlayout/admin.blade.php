<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','GaonGlobal - Admin area')</title>
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    @stack('css')
</head>
<body>
<main>
    <section class="sidebar">
     <nav>

     </nav>
    </section>
    <section class="content">
     <nav>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis vero esse iure fuga. Officiis, modi facilis maiores eum tempore neque exercitationem quos consectetur qui minima ipsum magnam totam magni hic!
     </nav>
    </section>
</main>
@yield('content')
</body>
<script src="{{asset('js/admin.js')}}"></script>
@stack('js')
</html>
