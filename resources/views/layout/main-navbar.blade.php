<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8"/>
		<title>Neuronas Reggae</title>
		
		<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <!-- jquery ui -->
        <link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.min.css') }}">
        <!-- styles -->
        <link rel="stylesheet" href="{{ asset('styles.css') }}">
        <!-- .ico -->
        <link rel="shortcut icon" href="{{ asset('NeuronaICO.ico') }}">
    </head>

    <body>

        <div id='div1'>
            <div class='navbar bg-faded'>
                <div class="nav-pills">
                    <ul class="nav nav-pills">
                        <li role="presentation"><a href="{{ url('/') }}">Principal</a></li>
                        <li role="presentation"><a href="{{ route(\App\Http\Routes\EventoRoutes::INDEX) }}">Eventos</a></li>
                        <li role="presentation"><a href="{{ route(\App\Http\Routes\ContactoRoutes::INDEX) }}">Contacto</a></li>
                        <li role="presentation"><a href="{{ route(\App\Http\Routes\CancionRoutes::INDEX) }}">Canciones</a></li>
                    </ul>
                </div>

                <form class="navbar-form navbar-right" role="search" id='secreto' style="display:none" method='POST'>
                    {!! csrf_field() !!}
                    <div class="form-group">
                       <input type="text" class="form-control" name="usuario" placeholder="Usuario...">
                    </div>
                    <div class="form-group">
                       <input type="text" class="form-control" name="contraseña" placeholder="Contraseña...">
                    </div>
                    <button type="submit" class="btn btn-default">Ingresar</button>
                </form>
            </div>
        </div>

        @yield('contenido')
        <div></div>

        <script src="{{ asset('bootstrap/js/jquery.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('estilosJquery.js') }}"></script>
	</body>
</html>