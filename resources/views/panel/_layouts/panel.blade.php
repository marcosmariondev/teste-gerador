<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Locação - @yield('title')</title>

    <link href="{{asset('site/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('site/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('site/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/style.css')}}" rel="stylesheet">

</head>

<body>



<div id="wrapper">

    @include('panel._layouts.navigation')

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            @include('panel._layouts.topnavbar')
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                @yield('content')
            </div>
        </div>

        @include('panel._layouts.footer')

    </div>
</div>

<!-- Mainly scripts -->
<script src="{{asset('site/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('site/js/popper.min.js')}}"></script>
<script src="{{asset('site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('site/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{asset('site/js/inspinia.js')}}"></script>
<script src="{{asset('site/js/plugins/pace/pace.min.js')}}"></script>

</body>

</html>
