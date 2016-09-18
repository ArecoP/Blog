<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="#">
        <img alt="EncarService" src="{{asset('descarga.png')}}">
        </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Inicio <span class="sr-only">(current)</span></a></li>
         <li class="active"><a href="{{ route('admin.users.index') }}">Usuarios <span class="sr-only">(current)</span></a></li>

        <li><a href="#">Noticias</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opciones <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Ultimas Noticias</a></li>
            <li><a href="#">Categorias</a></li>
            <li><a href="#">Usuarios</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Informacion</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Otros</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Contacto</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opciones <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Galeria</a></li>
            <li><a href="#">Mensajes</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Usuario</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
