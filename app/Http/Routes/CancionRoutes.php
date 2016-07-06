<?php
namespace App\Http\Routes;

use App\Http\Controllers\CancionController;
use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Routing\Router;
use LaravelBA\RouteBinder\RouteBinder;

class CancionRoutes implements RouteBinder
{
    const INDEX = 'canciones.index';

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
        $router->group(['middleware' => ['web'], 'prefix' => '/canciones'], function (Registrar $router) {
            $router->get('/', [
                'as'   => self::INDEX,
                'uses' => CancionController::class . '@index',
            ]);
        });
    }
}