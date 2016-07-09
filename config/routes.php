<?php

return [
    /**
     * Put all your route binder classes here.
     * The ServiceProvider will use the IoC container to instantiate them
     * and call the `addBindings()` and `addRoutes()` methods on each of them.
     *
     * Example:
     *
     * <code>
     * 'binders' => [
     *      App\Http\Routes\HomeRoutes::class,
     *      App\Http\Routes\FooRoutes::class,
     * ],
     * </code>
     */
    'binders' => [
        \App\Http\Routes\HomeRoutes::class,
        \App\Http\Routes\ContactoRoutes::class,
        \App\Http\Routes\CancionRoutes::class,
        \App\Http\Routes\EventoRoutes::class,
        \App\Http\Routes\AuthRoutes::class,
    ]
];