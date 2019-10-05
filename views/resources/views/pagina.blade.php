<html>
    <head>
        <link href="{{ URL::to('css/app.css')}}" rel="stylesheet">
    </head>
    <body>
        <div class="container text-center">
            <h3 style="font-size: 30px; font-weight: bold">Componente</h3>
        </div>

        @alerta(['tipo'=>'danger', 'titulo' => 'Erro fatal'])
            <strong> Erro: </strong> Sua Mensagem de erro
        @endalerta

        @alerta(['tipo'=>'warning', 'titulo' => 'Erro 404'])
            <strong> Erro: </strong> Sua Mensagem de erro
        @endalerta

        @alerta(['tipo'=>'success', 'titulo' => 'Erro 404'])
        <strong> Erro: </strong> Sua Mensagem de erro
        @endalerta

        @alerta(['tipo'=>'primary', 'titulo' => 'Erro 404'])
        <strong> Erro: </strong> Sua Mensagem de erro
        @endalerta

        @alerta(['tipo'=>'secondary', 'titulo' => 'Erro 404'])
        <strong> Erro: </strong> Sua Mensagem de erro
        @endalerta

        @alerta(['tipo'=>'info', 'titulo' => 'Erro 404'])
        <strong> Erro: </strong> Sua Mensagem de erro
        @endalerta

        @alerta(['tipo'=>'dark', 'titulo' => 'Erro 404'])
        <strong> Erro: </strong> Sua Mensagem de erro
        @endalerta

        <script src="{{ URL::to('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>
