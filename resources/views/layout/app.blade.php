
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"> </script>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despertar</title>
</head>
<body>
    
    <div id="app" style="">
        <div class="panel">
            <div class="logo">
                <img src="/img/logotipo.png" width="300" height="" alt="">
            </div>
            <div class="menu">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(Página atual)</span></a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/habilidade" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Habilidades
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="/habilidade">Consultar Habilidades</a>
                              <a class="dropdown-item" href="/habilidade/create">Nova Habilidade</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/paciente" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pacientes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="/paciente">Consultar Pacientes</a>
                              <a class="dropdown-item" href="/paciente/create">Novo Paciente</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/atividade" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Atividades
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="/atividade">Consultar Atividades</a>
                              <a class="dropdown-item" href="/atividade/create">Nova Atividade</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/consulta" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Consultas
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="/consulta">Consultas</a>
                              <a class="dropdown-item" href="/consulta/create">Nova Consulta</a>
                            </div>
                        </li>
                        @if(auth()->user()->group)
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="/admin" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Administrador
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/resposta">Consultar Respostas</a>
                                <a class="dropdown-item" href="/resposta/create">Criar Respostas</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/nivel">Consultar Nivel</a>
                                <a class="dropdown-item" href="/nivel/create">Criar Nivel</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/nivel">Consultar Usuarios</a>
                                <a class="dropdown-item" href="{{ route('register') }}">Criar Usuario</a>
                              </div>                          
                              
                          </li>
                        @endif
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/admin" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              {{auth()->user()->name}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="/resposta">Trocar Senha</a>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                              </a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            </div>
                        </li>
                        
                      </div>
                    </div>
                </nav>
            </div>
            <hr>
            <div class="conteudo">
                @hasSection ('conteudo')
                    @yield('conteudo')
                @endif
            </div>
            <hr>
            <div class="rodape"> Todos os direitos reservados - {{date('d/m/Y H:i:s')}}</div>
  
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"> </script>
    
</body>
</html>