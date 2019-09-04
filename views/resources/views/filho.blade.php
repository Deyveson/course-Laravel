@extends('layout.app')
{{-- Herdando um template de layout --}}

@section('titulo', 'Minha Pagina Filho')
{{-- Passando uma string pro componente pai --}}

@section('barralateral')
    @parent
    <p>Essa parte é do FILHO </p>
@endsection
{{-- sem o @parent, ele substitiu o valor da @section('barralateral'),
com o @parent ele apresenta o valor do pai e do filho --}}

@section('conteudo')
    <p> Esse é o conteúdo do filho.</p>
@endsection
{{-- Usando o section, para definir um conteúdo --}}
