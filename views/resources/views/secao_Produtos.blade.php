@extends('layout.meulayout')

@section('minha_secao_produtos')
    @if(isset($palavra))
        <p> Palavra: {{$palavra }} </p>
    @endif
@endsection
