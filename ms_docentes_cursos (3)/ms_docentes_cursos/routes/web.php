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


$router->get('docentes','DocenteController@index');
$router->get('docentes/{cod}','DocenteController@show');
$router->post('docentes','DocenteController@store');
$router->put('docentes/{cod}','DocenteController@update');
$router->delete('docentes/{cod}','DocenteController@destroy');

$router->get('cursos','CursoController@index');
$router->get('cursos/{cod}','CursoController@show');
$router->post('cursos','CursoController@store');
$router->put('cursos/{cod}','CursoController@update');
$router->delete('cursos/{cod}','CursoController@destroy');

$router->get('ocupaciones','OcupacionController@index');
$router->get('ocupaciones/{id}','OcupacionController@show');
$router->post('ocupaciones','OcupacionController@store');
$router->put('ocupaciones/{id}','OcupacionController@update');
$router->delete('ocupaciones/{id}','OcupacionController@destroy');


