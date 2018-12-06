@extends('layouts.app')

@section('headCSS')
    <!-- Bootstrap -->
    <link href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">

    @yield('adminHeadCSS')

    <!-- Custom Theme Style -->
    <link href="{{ asset('admin/build/css/custom.min.css') }}" rel="stylesheet"> 
@endsection


@section('content')

    @if (Auth::check())
        <div id="app" class="container body">
            <div class="main_container">
                @include('admin.sidebar')
                @include('admin.header')
                @yield('adminContent')
            </div>
        </div>
    @else
        @yield('adminContent')
    @endif

@endsection


@section('footerScript')
    <!-- jQuery -->
    <script src="{{ asset('admin/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('admin/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('admin/vendors/nprogress/nprogress.js') }}"></script>


    @auth
        @include('admin.footer')
    @endauth

    @yield('adminFooterScript')

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('admin/build/js/custom.min.js') }}"></script>

    <script>
    $("document").ready(function () {
        $('body').addClass('nav-md');
    });
    </script>

@endsection