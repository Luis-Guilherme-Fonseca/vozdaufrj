@extends ('templates/layout')

@section ('conteudo')

    <div class='contatoform '>
      <form class="form-horizontal">
          <h1 class="contact col-xs-offset-4 ">Contato</h1>
  <!-- Text input-->
          <div class="form-group">
              <label class="col-md-4 control-label" for="textinput"></label>
            <div class="col-md-6">
              <input id="textinput" name="textinput" type="text" placeholder="Nome" class="form-control input-md">
            
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput"></label>  
            <div class="col-md-6">
              <input id="textinput" name="textinput" type="Email" placeholder="Email" class="form-control input-md">
              
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput"></label>  
            <div class="col-md-6">
              <input id="textinput" name="textinput" type="Tel" placeholder="Telefone" class="form-control input-md">
              
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput"></label>  
            <div class="col-md-6">
              <input id="textinput" name="textinput" type="text" placeholder="Assunto" class="form-control input-md">
              
            </div>
          </div>

          <!-- Textarea -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textarea"></label>
            <div class="col-md-4">                     
              <textarea rows="10" cols="80" class="form-control" id="textarea" name="textarea" placeholder="Mensagem"></textarea>
            </div>
          </div>

          <br>

          <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
              <button id="singlebutton" name="singlebutton" class="btn btn-primary">ENVIAR MENSAGEM</button>
            </div>
          </div>

      </form>
    </div>
@endsection


