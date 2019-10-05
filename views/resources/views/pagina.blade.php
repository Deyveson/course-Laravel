<html>
    <head>
        <link href="{{ URL::to('css/app.css')}}" rel="stylesheet">
    </head>
    <body>
        <div class="container text-center">
            <h3 style="font-size: 30px; font-weight: bold">Componente</h3>
        </div>

        @component('components.meucomponente', ['tipo'=>'danger',
        'titulo' => 'Erro fatal'])
        @endcomponent

        @component('components.meucomponente', ['tipo'=>'primary',
        'titulo' => 'Erro 404'])
        @endcomponent

        <script src="{{ URL::to('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>
