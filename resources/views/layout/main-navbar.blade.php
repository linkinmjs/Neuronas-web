<!DOCTYPE HTML>
<html>
	<head>
        <meta charset="UTF-8"/>
		<title>Neuronas Reggae</title>

        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"/>
        <link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.css') }}"/>
        <link rel="stylesheet" href="{{ asset('cassette/cassette.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    </head>

    <body>
        @include("navbar.main")

        <div id='div1'>
            <div class='navbar bg-faded'>
                <form class="navbar-form navbar-right" id='secreto' style="display:none" method='POST' action="{{ route(\App\Http\Routes\AuthRoutes::LOGIN) }}">
                    {!! csrf_field() !!}
                    <div class="form-group">
                       <input type="text" class="form-control" name="login[name]" placeholder="Usuario..."/>
                    </div>
                    <div class="form-group">
                       <input type="text" class="form-control" name="login[password]" placeholder="Contraseña..."/>
                    </div>
                    <button class="btn btn-default">Ingresar</button>
                </form>
            </div>
        </div>

        @yield('contenido')

        <div></div>

        <script src="{{ asset('js/vendor.js') }}"></script>
        <script src="{{ asset('jquery-ui/jquery-ui.js') }}"></script>
        <script src="{{ asset('cassette/cassette.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>