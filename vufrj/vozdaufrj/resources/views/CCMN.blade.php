@extends('templates/layout')

@section('conteudo')
    <div class="container CCMN">
        <a href="{{route('BCMT')}}"><div class="curso col-xs-4"><h3 class="centralizaTexto">BCMT</h3></div></a>
        <div class="curso col-xs-4"><h3 class="centralizaTexto">COMP</h3></div>
        <div class="curso col-xs-4"><h3 class="centralizaTexto">GEOGRAFIA</h3></div>
    </div>

@endsection