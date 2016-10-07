@extends ('.templates/layout')

@section ('conteudo')
    <div class="container">
         <div class="col-xs-8">
            <h2>BCMT</h2>
            <h4>Informações Gerais</h4>
             <p>Este bacharel é um profissional generalista, com forte formação em matemática, física e ciências da natureza. </p>
             <p>Ele tem possibilidade de atuar tanto no mercado financeiro quanto em outros mercados em atividades nas quais análises matemáticas são importantes. </p>
             <p>É o caso dos serviços de metrologia, serviços estatísticos, instituições financeiras e seguradoras, por exemplo. O bacharel pode trabalhar também como autônomo, prestando consultoria para empresas.</p>
             <p><small>Fonte:  Guia do Estudante</small></p>
             <h4>Como estudante...</h4>
             <p>Acredito que com este curso pessoas indecisas dentro das ciências, podem ter uma experiência perfeita para descobrimento de novas situações</p>
             <p>Por ser uma grade bem flexível, tal curso oferece maior liberdade para quem o cursa</p>
             <p>Oferece-se também habilitações, que são uma espécie de especialização nas áreas citadas acima, além das possiblidades de tranferências oara diversos cursos do CCMN</p>
             <p class="centro">Se for aluno, avalie este curso</p>

             <div class="estrelas centro">
                 <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                 <label for="cm_star-1"><i class="fa"></i></label>
                 <input type="radio" id="cm_star-1" name="fb" value="1"/>
                 <label for="cm_star-2"><i class="fa"></i></label>
                 <input type="radio" id="cm_star-2" name="fb" value="2"/>
                 <label for="cm_star-3"><i class="fa"></i></label>
                 <input type="radio" id="cm_star-3" name="fb" value="3"/>
                 <label for="cm_star-4"><i class="fa"></i></label>
                 <input type="radio" id="cm_star-4" name="fb" value="4"/>
                 <label for="cm_star-5"><i class="fa"></i></label>
                 <input type="radio" id="cm_star-5" name="fb" value="5"/>
             </div>

             <p>Deixe seu comentário: </p>
            <div >
             <div class="fb-comments" data-href="http://localhost/vozdaufrj/public/BCMT" data-width="600" data-numposts="5"></div>
             <div id="fb-root"></div>
            </div>

             <script>(function(d, s, id) {
                     var js, fjs = d.getElementsByTagName(s)[0];
                     if (d.getElementById(id)) return;
                     js = d.createElement(s); js.id = id;
                     js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.7";
                     fjs.parentNode.insertBefore(js, fjs);
                 }(document, 'script', 'facebook-jssdk'));</script>

         </div>
        <div class="col-xs-2 col-xs-offset-2 anuncios">

        </div>
    </div>
    @endsection