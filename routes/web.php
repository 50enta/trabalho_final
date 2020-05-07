<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::group(['middleware' =>'admin'], function (){

    Route::get('/admin/login', 'AdminController@login')->name('/admin/login');
    Route::post('/admin/login', 'AdminController@postLogin');
    Route::view('/admin/register','auth.register_admin')->name('/admin/register');
    Route::post('/admin/register', 'AdminController@createRegister');
    Route::get('/admin/logout', 'AdminController@logout')->name('/admin/logout');


    Route::group(['middleware' =>'auth:admin'], function (){

    });
});


Route::get('/admin', 'AdminController@index');
Route::get('/registoColaborador', 'ColaboradoresController@index');
Route::post('/adicionarColaborador','ColaboradoresController@create');
Route::post('editarColaborador','ColaboradoresController@editarCol');
Route::post('eliminarColaborador','ColaboradoresController@eliminarCol');

Route::get('/registoTipoEvento', 'TipoEventoController@index');
Route::post('/adicionarTipoEvento','TipoEventoController@create');
Route::post('/editarTipoEvento','TipoEventoController@editarTipoEvento');
Route::post('/eliminarTipoEvento','TipoEventoController@eliminarTipoEvento');

Route::get('/registoTipoEvento', 'TiposEventoController@index');
Route::post('/adicionarTipoEvento','TiposEventoController@create');
Route::post('/editarTipoEvento','TiposEventoController@editarTipoEvento');
Route::post('/eliminarTipoEvento','TiposEventoController@eliminarTipoEvento');


Route::get('/registoServico', 'ServicosController@index');
Route::post('/adicionarServico','ServicosController@create');
Route::get('/servicoDetalhes', 'ServicosController@detalheServico');
Route::post('/editarServico','ServicosController@editarServico');
Route::post('/eliminarServico','ServicosController@eliminarServico');



Route::get('/registoCategoriaItens', 'CategoriaItensController@index');
Route::post('/adicionarCategoriaItens','CategoriaItensController@create');
Route::post('/editarCategoriaItens','CategoriaItensController@editarCategoriaItens');
Route::post('/eliminarCategoriaItens','CategoriaItensController@eliminarCategoriaItens');


Route::get('/registoItens', 'itensMaterialController@index');
Route::post('/adicionarItensMateriais','itensMaterialController@create');
Route::post('/editarItensMaterial','itensMaterialController@editarItens');
Route::post('/eliminarItensMaterial','itensMaterialController@eliminarItens');

Route::get('/pacotes', 'PacoteEventoController@index');

Route::get('/galeria', 'GaleriaImagemController@index');
//Route::get('/galeria', 'categoriaImagensController@index'); //mudar essa rota para outro nome: não pode ser os dados sao para a mesma rota: não podem ter o mesmo nome
Route::post('/adicionarFotos', 'GaleriaImagemController@store');
Route::post('/editarImagem', 'GaleriaImagemController@editarImagem');
Route::post('/eliminarImagem', 'GaleriaImagemController@eliminarImagem');

Route::get('/verReservas', 'EventoController@verReservas');



//cliente

Route::group(['middleware' =>'web'], function () {
    Route::get('/', 'TiposEventoController@displayInicio');
    Route::get('/detalhes/{tipo_id}', 'TiposEventoController@mostrarDetalhes')->name('/detalhes/{tipo_id}');;

    Route::group(['middleware' =>'auth:web'], function (){
        Route::get('/efectuarReserva', 'EventoController@index')->name('/efectuarReserva');
        Route::post('/adicionarReserva', 'EventoController@addEvent')->name('/adicionarReserva');

//        Route::get('/perfil', 'PerfilController@index')->name('/perfil')->middleware('auth');
        Route::get('/perfil/{user_id}', 'PerfilController@findUser')->name('/{user_id}');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
