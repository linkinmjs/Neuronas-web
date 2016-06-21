<!DOCTYPE html>
<html>

	<head>
		<title>Neuronas Reggae</title>
		
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <!-- jquery ui -->
        <link rel="stylesheet" href="{{ URL::asset('jquery-ui/jquery-ui.min.css') }}">
        <script src="jquery-ui/jquery-ui.min.js"></script>

        <!-- Google font -->
        <link href='https://fonts.googleapis.com/css?family=Indie+Flower|Bangers|Permanent+Marker|Rock+Salt' rel='stylesheet' type='text/css'>

        <!-- styles -->
        <link rel="stylesheet" href="{{ URL::asset('styles.css') }}">
	
        <!-- .ico -->
        <link rel="shortcut icon" href="{{ asset('NeuronaICO.ico') }}">
    </head>

    <body>

        <div class='navbar bg-faded'>
            <div class="nav-pills">
                <ul class="nav nav-pills">
                    <li role="presentation"><a href="index">Principal</a></li>
                    <li role="presentation"><a href="eventos">Eventos</a></li>
                    <li role="presentation"><a href="contactos">Contacto</a></li>
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

            @yield('contenido')
                    
		<script src="estilosJquery.js"></script>
	</body>

</html>