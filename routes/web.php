<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('api/register', ['uses' => 'LoginController@register']);
$router->post('api/login', ['uses' => 'LoginController@login']);
$router->get('api/kategori', ['uses' => 'KategoriController@index']);


$router->group(['prefix' => 'api', 'middleware' => 'auth'], function () use ($router) {

    $router->get('kategori/{id}', ['uses' => 'KategoriController@show']);
    $router->delete('kategori/{id}', ['uses' => 'KategoriController@destroy']);
    $router->put('kategori/{id}', ['uses' => 'KategoriController@update']);
    $router->post('kategori', ['uses' => 'KategoriController@create']);

    $router->get('pelanggan', ['uses' => 'PelangganController@index']);
    $router->get('pelanggan/{id}', ['uses' => 'PelangganController@show']);
    $router->delete('pelanggan/{id}', ['uses' => 'pelangganController@destroy']);
    $router->put('pelanggan/{id}', ['uses' => 'pelangganController@update']);
    $router->post('pelanggan', ['uses' => 'pelangganController@create']);

    $router->get('menu', ['uses' => 'MenuController@index']);
    $router->get('menu/{id}', ['uses' => 'MenuController@show']);
    $router->delete('menu/{id}', ['uses' => 'MenuController@destroy']);
    $router->post('menu/{id}', ['uses' => 'MenuController@update']);
    $router->post('menu', ['uses' => 'MenuController@create']);

    $router->get('order', ['uses' => 'OrderController@index']);
    $router->get('order/{a}/{b}', ['uses' => 'OrderController@show']);
    $router->put('order/{id}', ['uses' => 'OrderController@update']);

    $router->get('detail/{a}/{b}', ['uses' => 'DetailController@show']);

    $router->get('user', ['uses' => 'LoginController@index']);
    $router->put('user/{id}', ['uses' => 'LoginController@update']);
});
