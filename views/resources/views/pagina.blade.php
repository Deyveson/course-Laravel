<html>
    <head>

        {{--    importando normal    --}}
        {{--<link href="{{ asset('css/app.css')}}" rel="stylesheet">--}}

        {{--    URL TO    --}}
        <link href="{{ URL::to('css/app.css')}}" rel="stylesheet">
    </head>
    <body>
        <div class="alert alert-primary" role="alert">
            Este é um alerta primário — confira!
        </div>
        {{--<script src="{{ asset('js/app.js')}}" type="text/javascript"></script>--}}
        <script src="{{ URL::to('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>
