<?php
namespace App\Http\Routes;

use App\Evento;
use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Routing\Router;
use LaravelBA\RouteBinder\RouteBinder;

class HomeRoutes implements RouteBinder
{
    /**
     * @param Router $router
     */
    public function addBindings(Router $router)
    {
        //
    }

    /**
     * @param Registrar $router
     */
    public function addRoutes(Registrar $router)
    {
        $router->group(['middleware' => ['web'], 'prefix' => '/'], function (Registrar $router) {
            $router->get('/', function () {
                return view('index', ['eventos' => Evento::all()]);
            });
        });
    }
}