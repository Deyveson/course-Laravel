<html>
    <head>
        <title> Título:  @yield('titulo') </title>
    {{--    Recebendo valor do filho  '@yield('titulo')'     --}}
    </head>
    <body>
        @section('barralateral')
            <p>Essa parte da seção é do template PAI</p>
        @show
        {{--    '@show' e pra apresentar a section    --}}
        <div>
            @yield('conteudo')
        {{--      aponta qual seção ele deve mostrar '@yield('nome da seção')'      --}}
        </div>
    </body>
</html>
