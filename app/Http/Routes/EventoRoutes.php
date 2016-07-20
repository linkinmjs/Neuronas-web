<?php
namespace App\Http\Routes;

use App\Http\Controllers\EventoController;
use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Routing\Router;
use LaravelBA\RouteBinder\RouteBinder;

class EventoRoutes implements RouteBinder
{
    const INDEX = 'eventos.index';

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
        $router->group(['middleware' => ['web','auth'], 'prefix' => '/eventos'], function (Registrar $router) {
            $router->get('/', [

                'as'   => self::INDEX,
                'uses' => EventoController::class . '@index',
            ]);

            $router->post('/', [

                'as'   => self::INDEX,
                'uses' => EventoController::class . '@store',
            ]);
        });
    }
}