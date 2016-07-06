<?php
namespace App\Http\Routes;

use App\Http\Controllers\ContactoController;
use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Routing\Router;
use LaravelBA\RouteBinder\RouteBinder;

class ContactoRoutes implements RouteBinder
{
    const INDEX = 'contactos.index';

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
        $router->group(['middleware' => ['web'], 'prefix' => '/contactos'], function (Registrar $router) {
            $router->get('/', [
                'as'   => self::INDEX,
                'uses' => ContactoController::class . '@index',
            ]);
        });
    }
}