<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Pretord" />
        <title>Tienda PRETORD</title>
        {!! Html::style('css/bootstrap.css') !!}
        {!! Html::style('css/style.css') !!}
        {!! Html::style('css/megamenu.css') !!}
        {!! Html::style('http://fonts.googleapis.com/css?family=Cabin:400,500,600,700') !!}
        @yield('styles')
    </head>
    <body>
        <div class="container">
            @yield('header')

            @yield('content')

            @yield('footer')    
        </div>
        <script type="text/javascript">
            var main_path = '{{ URL::to("/") }}';
        </script>
        {!! Html::script('js/jquery.min.js') !!}
        {!! Html::script('js/megamenu.js') !!}
        {!! Html::script('js/easing.js') !!}
        {!! Html::script('js/camera.min.js') !!}
        @yield('scripts')
    </body>
</html>
