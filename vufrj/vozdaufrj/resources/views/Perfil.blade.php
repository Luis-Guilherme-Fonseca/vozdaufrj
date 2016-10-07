@extends ('.templates/layout')

@section ('conteudo')
    <div class="container">
        <div class="col-xs-3"></div>
        <div class="col-xs-6">
            <div class="titulo_perfil">
                <div class="retangulo"></div>
                NOME DO CARINHA
                {{--Aqui Entrará esta linha abaixo--}}
                {{--<img src="{{asset($img)}}"--}}
                {{--<p>{{$nome}}</p>--}}
            </div>
            <div>
                Detalhes da Conta:
                <th></th>
                <p>
                    <button class="btn-primary">Altere seu Nome, Credenciais e Bibliografia</button>
                </p>
                <p>
                    <button class="btn-primary">Altere seu Avatar</button>
                </p>
                <p>
                    <button class="btn-primary">Altere sua senha</button>
                </p>
            </div>
        </div>

    <div class="col-xs-3"></div>
    </div>
@endsection