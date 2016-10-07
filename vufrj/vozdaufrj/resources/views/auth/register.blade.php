@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="nome" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="DRE">DRE: </label>
                            <input type="text" class="form-control" name="DRE" id="DRE" maxlength="9" minlength="9">
                        </div>


                        <div class="form-group">
                            <label for="predio">Prédio: </label>
                            <select class="form-control" name="predio" id="predio" onchange="optionCheck()">
                                <option value=""></option>
                                <option value="CCMN">CCMN</option>
                                <option value="CCS">CCS</option>
                                <option value="CT">CT</option>
                                <option value="REITORIA">REITORIA</option>
                                <option value="LETRAS">LETRAS</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="Curso">Curso: </label>
                            <select class="escondidinho" name="CCMN" id="CCMN" >
                                <option value=""></option>
                                <option value="BCMT">BCMT</option>
                                <option value="Meteorologia">Meteorologia</option>
                                <option value="Geologia">Geologia</option>
                                <option value="Astronomia">Astronomia</option>
                                <option value="Ciência da Computação">Ciência da Computação</option>
                                <option value="Geografia">Geografia</option>
                            </select>
                            <select class="escondidinho" name="CCS" id="CCS">
                                <option value=""></option>
                                <option value="Medicina">Medicina</option>
                                <option value="Biologia">Biologia</option>
                                <option value="Educação Física">Educação Física</option>
                                <option value="Dança">Dança</option>
                                <option value="Farmácia">Farmácia</option>
                                <option value="Enfermagem">Enfermagem</option>
                                <option value="Fonoaudiologia">Fonoaudiologia</option>
                                <option value="Fisioterapia">Fisioterapia</option>
                                <option value="Terapia Ocupacional">Terapia Ocupacional</option>
                                <option value="Odontologia">Odontologia</option>
                                <option value="Nutrição">Nutrição</option>
                                <option value="Gastronomia">Gastronomia</option>
                            </select>
                            <select class="escondidinho" name="CT" id="CT" >
                                <option value=""></option>
                                <option value="Engenharia Ambiental">Engenharia Ambiental</option>
                                <option value="Engenharia Civil">Engenharia Civil</option>
                                <option value="Engenharia-Básico">Engenharia-Básico</option>
                                <option value="Engenharia de Computação e Informação">Engenharia de Computação e Informação</option>
                                <option value="Engenharia de Controle e Automação">Engenharia de Controle e Automação</option>
                                <option value="Engenharia de Materiais">Engenharia de Materiais</option>
                                <option value="Engenharia de Petróleo">Engenharia de Petróleo</option>
                                <option value="Engenharia de Produção">Engenharia de Produção</option>
                                <option value="Engenharia Eletrônica e de Computação">Engenharia Eletrônica e de Computação</option>
                                <option value="Engenharia Elétrica">Engenharia Elétrica</option>
                                <option value="Engenharia Mecânica">Engenharia Mecânica</option>
                                <option value="Engenharia Metalúrgica">Engenharia Metalúrgica</option>
                                <option value="Engenharia Naval e Oceânica">Engenharia Naval e Oceânica</option>
                                <option value="Engenharia Nuclear">Engenharia Nuclear</option>
                            </select>
                            <select class="escondidinho" name="REITORIA" id="REITORIA" >
                                <option value=""></option>
                                <option value="Design de Interiores">Design de Interiores</option>
                                <option value="Arquitetura">Arquitetura</option>
                                <option value="Design">Design</option>
                                <option value="Belas Artes">Belas Artes</option>
                            </select>
                            <select class="escondidinho" name="LETRAS" id="LETRAS" >
                                <option value=""></option>
                                <option value="Portugues-Alemao">Portugues-Alemao</option>
                                <option value="Portugues-Arabe">Portugues-Arabe</option>
                                <option value="Portugues-Espanhol">Portugues-Espanhol</option>
                                <option value="Portugues-Frances">Portugues-Frances</option>
                                <option value="Portugues-Grego">Portugues-Grego</option>
                                <option value="Portugues-Russo">Portugues-Russo</option>
                            </select>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
