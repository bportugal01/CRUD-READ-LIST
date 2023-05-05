  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      @vite([
      'resources/css/app.css',
      'resources/js/app.js',
      'node_modules/bootstrap/dist/css/bootstrap.min.css',
      'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
      ])
  </head>

  <body style="background-color: #CCCCCC;">
      <div class="container">
          <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
              <div class="container">
                  <a class="navbar-brand" href="#"> Sistema Web</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                          <li class="nav-item active">
                              <a class="nav-link" href="#">Cadastrar</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{url('listar-agendamento')}}">Consultar</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>
          @if(Session::get('success'))
          <div class="alert alert-success" role="alert">
              {{Session::get('success')}}
          </div>
          @endif
          @if(Session::get('fail'))
          <div class="alert alert-danger" role="alert">
              {{Session::get('fail')}}
          </div>
          @endif
          <form style="background-color: #FFFFFF; padding:0px 20px 20px 20px" method="post" action="{{url('add-aged')}}">
              @csrf
              <div class="container">
                  <div class="form-group">
                      <div class="container"><br>
                          <h3> <label>Cadastrar - Agendamento de Potenciais Clientes</label></h3>
                          <label>Sistema utilizado para agendamento de serviços.</label><br><br>
                          <div class="form-group">
                              <label>Nome:</label>
                              <input type="text" class="form-control" name="Nome" autocomplete="off"  placeholder="Nome do Cliente">
                              <span style="color:red">@error('Nome'){{$message}} @enderror</span>
                          </div>
                          <br>
                          <div class="form-group">
                              <label>Telefone:</label>
                              <input type="text" class="form-control" name="Telefone" autocomplete="off"  id="telefone"placeholder="(xx) xxxxx-xxxx" maxlength="15" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.keyCode == 46 || event.keyCode == 8;">
                              <span style="color:red">@error('Telefone'){{$message}} @enderror</span>

                          </div>
                          <br>
                          <div class="form-group">
                              <label for="exampleFormControlSelect1">Origem</label>
                              <select class="form-control" id="exampleFormControlSelect1" name="Origem">
                                  <span style="color:red">@error('Origem'){{$message}} @enderror</span>
                                  <option>Selecione...</option>
                                  <option>Linkedin</option>
                                  <option>whatsapp</option>
                                  <option>Telegram</option>
                              </select>
                          </div>
                          <br>
                          <div class="form-group">
                              <label>Data do Contado:</label>
                              <input type="date" class="form-control" name="DataContato" autocomplete="off"  placeholder="(xx) xxxxx - xxxx">
                              <span style="color:red">@error('DataContato'){{$message}} @enderror</span>
                          </div>
                          <br>
                          <div class="form-group">
                              <label for="exampleFormControlTextarea1">Observação</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" autocomplete="off"  name="Observacao" rows="3"></textarea>
                              <span style="color:red">@error('Observacao'){{$message}} @enderror</span>
                          </div>
                          <br>
                          <button type="submit" class="btn btn-primary">Cadastrar</button>
          </form>
      </div>
  </body>

  </html>