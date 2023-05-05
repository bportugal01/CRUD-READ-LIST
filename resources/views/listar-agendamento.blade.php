<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema WEB</title>
    @vite([
    'resources/js/app.js',
    'resources/css/app.css',
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
    ])
</head>

<body style="background-color: #CCCCCC;">
    <div class="container">
        <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/"> Sistema Web</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('listar-agendamento')}}">Consultar</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <form style="background-color: #FFFFFF; padding:0px 20px 20px 20px">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Origem</th>
                            <th>Data Contato</th>
                            <th>Observação</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $campos)
                        <tr>
                            <th scope="row">{{$campos->id}}</th>
                            <td>{{$campos->Nome}}</td>
                            <td>{{$campos->Telefone}}</td>
                            <td>{{$campos->Origem}}</td>
                            <td>{{$campos->DataContato}}</td>
                            <td>{{$campos->Observacao}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="delete/{{$campos->id}}" type="button" class="btn btn-danger btn-xs">Deletar</a>
                                    <a href="edit-agendamento/{{$campos->id}}" type="button" class="btn btn-warning btn-xs">Editar</a>
                                </div>
                            </td>
                            @endforeach
                    </tbody>
                </table>
            </div>

          
        </form>

    </div>

</body>

</html>