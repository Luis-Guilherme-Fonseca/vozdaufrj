<!DOCTYPE html>

<html>
    <head>
        <title>Voz da UFRJ</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('css/cadastro.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/noticias.css')}}">
        <script src='{{asset("ckeditor/ckeditor.js")}}'></script>

    </head>

    <body>
    <!-- Modal Cadastro -->
    <div id="modalCad" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Cadastro</h4>
                </div>
                <form action="{{action('UserController@store')}}" method="POST">
                    <div class="modal-body edit-content container-fluid">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="nome">Nome: </label>
                            <input type="text" class="form-control" name="nome" id="nome">
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


                        <div class="form-group">
                            <label for="email">E-mail: </label>
                            <input type="email" class="form-control" name="email" id="nome_input">
                        </div>

                        <div class="form-group">
                            <label for="senha">Senha: </label>
                            <input type="password" name="senha" id="senha" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary text-right">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <!--fim do modal-->

    <div id="modalNot" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Criação de novas Notícias</h4>
                </div>
                <form action="{{action('NoticiasController@store')}}" method="POST">
                    <div class="modal-body edit-content container-fluid">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="noticia">Notícia: </label>
                            <textarea name="noticia" id="noticia" rows="10" cols="80">
                                    <h1 class="CCMN">Notícia do CCMN</h1>
                                </textarea>
                            <script>
                                // Replace the <textarea id="editor1"> with a CKEditor
                                // instance, using default configuration.
                                CKEDITOR.replace( 'noticia' );
                            </script>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary text-right">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="modalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Criação de novas Notícias</h4>
                </div>
                <form action="" method="">
                    <div class="modal-body edit-content container-fluid">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="noticia">Notícia: </label>
                            <textarea name="editar" id="editar" rows="10" cols="80">
                                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" id="titulo" class="form-control" value="{{old('titulo', $noticia->titulo)}}" placeholder="titulo aqui...">
                </div>
                <div class="form-group">
                    <?php $field = 'imagem' ?>
                    <label for="{{$field}}">{{ucfirst($field)}}</label>
                    <input type="file" id="{{$field}}" name="{{$field}}">
                </div>
                <label for="conteudo">Conteúdo</label>

                <div class="conteudoOriginalTextContainer hidden">{!! old('conteudo', $noticia->conteudo) !!}</div>
                <textarea id="conteudo" name="conteudo"></textarea>
                        </div>


                            </textarea>
                            <script>
                                // Replace the <textarea id="editor1"> with a CKEditor
                                // instance, using default configuration.
                                CKEDITOR.replace( 'editar' );
                            </script>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary text-right">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <header>
            <div class="cabecalho container">

                <img class="col-xs-1 col-md-1 col-lg-1 img-responsive ufrjlog" src="{{asset('./imagens/003minerva_transparente_vertical.png')}}" width="50px">
                <h1 class="col-xs-4 col-xs-offset-3 col-md-4 col-md-offset-3 col-lg-4 col-lg-offset-3">Voz da UFRJ</h1>
                <div class="col-xs-4 col-md-4 col-lg-4">
                    @if (Auth::guest())
                        <p><a class="link" href="{{ url('/login') }}">Login</a></p>
                        <a class="link" href="{{ url('/register') }}">Register</a>
                    @else
                                <li>
                                    <a class="link" href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                    @endif

                </div>
            </div>


            <nav class="dropdownNav marginBottom-0" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('principal')}}">HOME</a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <li><a href="{{route('contato')}}">CONTATO</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">PRÉDIO<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('CCMN')}}">CCMN</a></li>
                                <li><a href="#">CCS</a></li>
                                <li><a href="#">CT</a></li>
                                <li><a href="#">EEFD</a></li>
                                <li><a href="#">LETRAS</a></li>

                                <li class="divider"></li>

                            </ul>
                        </li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </header>


        <div class="container contColor">
        @yield('conteudo')
        </div>

        <div class="container-fluid rodape">
            <footer>

                <div class="col-xs-3 elementos_footer">
                    <ul class="list-unstyled">
                        <li><p class="titulo_footer">Links úteis</p></li>
                        <li><a href="#">Site UFRJ</a></li>
                        <li><a href="#">Grade Cursos</a></li>
                        <li><a href="#">Bolsas</a></li>
                    </ul> </div>
                <div class="col-xs-6 elementos_footer"><p class="titulo_footer">Sobre Nós</p>
                        <p>O Voz da UFRJ foi criado por três alunos que perceberam a necessidade de ampliar o conhecimento das pessoas sobre seu
                        curso de interesse.</p>
                        <p>Para isso, disponibilizamos o acesso as avaliações e comentários feitos por pessoas que estão
                        cursando a graduação.</p></div>
                <div class="col-xs-3 elementos_footer">
                    <p class="titulo_footer">Redes Sociais</p>
                    <img src="{{asset('./imagens/facebook.png')}}" class="icones">
                    <img src="{{asset('./imagens/instagram.png')}}" class="icones">
                    <img src="{{asset('./imagens/twitter.png')}}" class="icones">
                </div>



            </footer>
        </div>

    </body>
    <script src='{{asset("js/app.js")}}'></script>
    <script src='{{asset("js/dropdown.js")}}'></script>
    <script src='{{asset("js/select.js")}}'></script>



</html>


