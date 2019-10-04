<html>
    <head>
        {{--    importando normal    --}}
        {{--<link href="{{ asset('css/app.css')}}" rel="stylesheet">--}}

        {{--    URL TO    --}}
        <link href="{{ URL::to('css/app.css')}}" rel="stylesheet">
    </head>
    <body>
        <div class="container text-center">
            <h3 style="font-size: 30px; font-weight: bold">Componente</h3>
        </div>

        @component('components.meucomponente', ['tipo'=>'danger',  'titulo' => 'Erro fatal'])
            {{--  Second form de passar um dado pro  filho    --}}


            <strong>Erro: </strong> Sua mensagem de erro.

{{--        @slot('titulo')                                  --}}
{{--          Erro fatal                                     --}}
{{--        @endslot                                         --}}

{{--        @slot('tipo')                                    --}}
{{--            primary                                      --}}
{{--        @endslot                                         --}}
            {{--  First form de passar um dado pro  filho    --}}

        @endcomponent
        {{-- Passando para o componente atraves do strong --}}

        {{--<script src="{{ asset('js/app.js')}}" type="text/javascript"></script>--}}
        <script src="{{ URL::to('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>
