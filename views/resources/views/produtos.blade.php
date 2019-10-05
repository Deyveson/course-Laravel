<html>
    <head>
        <link href="{{ URL::to('css/app.css')}}" rel="stylesheet">
    </head>
    <body>

        @if(isset($produtos))

            @if(count($produtos) == 0)
                <h1> Nenhum produto </h1>
            @elseif (count($produtos) === 1)
                <h1> Um Produto </h1>
            @else
                <h1>Temos vários produtos</h1>
            @endif

        @else
            <h2> Variavel produtos não foi passada como parâmetro </h2>
        @endif

        @empty($produtos)
            <h2> Nada em produtos </h2>
        @endempty

        <script src="{{ URL::to('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>
