@extends('client.layouts.base')
@section('metas')
    @parent
    <meta name="description" content="">
    <meta name="keywords" content="" />
    

    <title>Document</title>
@endsection

@section('fonts')
    
@endsection

@section('styles')
    @parent
    <!-- font aswome -->
    <link rel="stylesheet" href="{{ asset('client/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/fontawesome.min.css') }}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('client/assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/sass/style.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/responsive.css') }}">
@endsection

@section('body.content')

    <!-- preloader area start -->
    <x-client.layouts.preloader />
    <!-- preloader area end -->

    <!-- Start::Header -->
    <x-client.layouts.header />
    <!-- End::Header -->

    <div style="min-height: 500px">
        @yield('main.content')
    </div>
    

    <!-- Start::Footer -->
    <x-client.layouts.footer />
    <!-- End::Footer -->
@endsection

@section('footer.scripts')
    @parent
    <!-- all plugins here -->
    <script src="{{ asset('client/assets/js/vendor.js') }}"></script>
    <!-- main js  -->
    <script src="{{ asset('client/assets/js/main.js') }}"></script>
@endsection
    
