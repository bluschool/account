<?php

use Illuminate\Routing\Router;
use Orchestra\Support\Facades\Foundation;

/*
|--------------------------------------------------------------------------
| Routing
|--------------------------------------------------------------------------
*/

Foundation::group('bluschool/account', 'account', ['namespace' => 'Bluschool\Account\Http\Controllers'], function (Router $router) {

    $router->post('news/create', 'AccountController@store');
    $router->get('news/create', 'AccountController@create');
    $router->get('news/update/{id}', 'AccountController@update');
    $router->get('news/delete/{id}', 'AccountController@delete');
    $router->get('news', 'AccountController@news');

    $router->post('event/create', 'AccountController@store');
    $router->get('event/create', 'AccountController@create');
    $router->get('event/update/{id}', 'AccountController@update');
    $router->get('event/delete/{id}', 'AccountController@delete');
    $router->get('event', 'AccountController@event');

    $router->get('cal', 'AccountController@calendar');
    $router->get('activityFeed', 'AccountController@index');
    $router->get('/', 'HomeController@index');

});