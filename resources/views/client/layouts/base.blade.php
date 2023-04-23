<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel=icon href="assets/img/favicon.png" sizes="20x20" type="image/png">

    @yield('metas')
    @yield('fonts')
    @yield('styles')
    @yield('head.scripts')
    
</head>
<!--begin::Body-->
<body @yield('body.attributes')>
    @yield('body.content')

    @yield('footer.scripts')
    @stack('footer.scripts.stack')
</body>
<!--end::Body-->



</html>