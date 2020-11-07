<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $usuarios = array(
       array('nombre' => 'alex', 'apellido' => 'diaz', 'telefono' => '8844594'),
       array('nombre' => 'alex', 'apellido' => 'diaz', 'telefono' => '8844594'),
       array('nombre' => 'alex', 'apellido' => 'diaz', 'telefono' => '8844594'),
       array('nombre' => 'ddd', 'apellido' => 'dddd', 'telefono' => 'qweqwe'),
    );

    foreach ($usuarios as $usuario) {
        echo $usuario['nombre'] . ' ' . $usuario['apellido'] . ' ' . $usuario['telefono'];
    }
});
