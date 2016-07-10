<?php
namespace App\Http\Routes;

use App\Http\Controllers\AuthController;
use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Routing\Router;
use LaravelBA\RouteBinder\RouteBinder;

class AuthRoutes implements RouteBinder
{
    const LOGIN = 'auth.login';
    const LOGOUT = 'auth.logout';

    public function addBindings(Router $router)
    {
        //
    }

    public function addRoutes(Registrar $router)
    {        
        $router->group(['middleware' => ['web'], 'prefix' => '/auth'], function (Registrar $router) {
            $router->post('/login', [
                'as'   => self::LOGIN,
                'uses' => AuthController::class . '@login',
            ]);
            $router->get('/logout', [
                'as'   => self::LOGOUT,
                'uses' => AuthController::class . '@logout',
            ]);
        });
    }
}
