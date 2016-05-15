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
	</head>

	<body>
        <ul class="nav nav-pills">
            <li role="presentation"><a href="#">Principal</a></li>
            <li role="presentation"><a href="eventos">Eventos</a></li>
            <li role="presentation"><a href="#">Contacto</a></li>
        </ul>           



        @yield('contenido')

		<script src="estilosJquery.js"></script>
	</body>

</html>