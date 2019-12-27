<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <link href="{{asset('site/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/style.css')}}" rel="stylesheet">

</head>
<body>
<v-app id="app">

</v-app>


<script src="{{ mix('/js/app.js') }}"></script>

<!-- Mainly scripts -->
<script src="{{asset('site/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('site/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{asset('site/js/inspinia.js')}}"></script>
<script src="{{asset('site/js/plugins/pace/pace.min.js')}}"></script>



</body>
</html>
