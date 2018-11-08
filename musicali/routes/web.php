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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/alunos/home', 'HomeController@index')->name('alunos/home');
Route::get('/professores/home', 'HomeController@index')->name('professores/home');
Route::get('/operadores/home', 'HomeController@index')->name('operadores/home');

Route::get('/administradores/home', 'HomeController@index')->name('administradores/home');

Route::resource('/alunos', 'AdministradorOperador\AlunoController');
Route::get('/alunos/cursos/addCurso/{id}', 'AdministradorOperador\AlunoController@addCurso');
Route::post('/alunos/{id}', 'AdministradorOperador\AlunoController@storeAddCurso');


Route::get('/alunos/cursos/meuscursos', 'AlunoController@meusCursos')->name('cursosalunos');
Route::get('/alunos/cursos/{id}', 'AlunoController@showCurso');
Route::get('/alunos/cursos/modulos/{id}', 'AlunoController@showModulo');
Route::resource('/quiz', 'TestController');
Route::get('/quiz/{id}', 'TestController@show');
Route::post('/quiz/{id}', 'TestController@gabarito');


Route::resource('/premios', 'AdministradorOperador\PremioController');
Route::resource('/certificados', 'CertificadoController');
Route::resource('/relatorios', 'RelatorioController');
Route::get('/alunos/premios/meuspremios', 'AlunoController@meusPremios')->name('premiosalunos');
Route::get('/alunos/premios/{id}', 'AlunoController@showPremio');


Route::resource('/operadores', 'AdministradorOperador\OperadorController');

Route::resource('/professores', 'AdministradorOperador\ProfessorController');
Route::get('/professores/cursos/addCurso/{id}', 'AdministradorOperador\ProfessorController@addCurso');
Route::post('/professores/{id}', 'AdministradorOperador\ProfessorController@storeAddCurso');


Route::get('/professores/cursos/meuscursos', 'ProfessorController@meusCursos')->name('cursosprofessores');
Route::get('/professores/cursos/{id}', 'ProfessorController@showCurso');
Route::get('/professores/cursos/modulos/{id}', 'ProfessorController@showModulo');


Route::resource('/cursos', 'AdministradorOperador\CursoController');
Route::patch('/cursos/{id}', 'AdministradorOperador\CursoController@update')->name('cursosid');

Route::resource('/cursos/modulos', 'AdministradorOperador\ModuloController');
Route::resource('/cursos/modulos/aulas', 'AdministradorOperador\AulaController');

Route::get('/cursos/modulos/create/{id}', 'AdministradorOperador\ModuloController@create');
Route::post('/cursos/{id}', 'AdministradorOperador\ModuloController@store')->name('cursosmodulos');
Route::patch('/cursos/modulos/{id}', 'AdministradorOperador\ModuloController@update')->name('cursosmodulosid');

Route::get('/cursos/modulos/aulas/create/{id}', 'AdministradorOperador\AulaController@create');
Route::post('/cursos/modulos/{id}', 'AdministradorOperador\AulaController@store')->name('cursosmodulosaulas');
Route::post('/cursos/modulos/aulas/{id}', 'AdministradorOperador\AulaController@update')->name('cursosmodulosaulasid');


Route::resource('/tests', 'AdministradorOperador\TestController');

Route::resource('/tests/questions', 'AdministradorOperador\QuestionController');
Route::get('/tests/questions/create/{id}', 'AdministradorOperador\QuestionController@create');
Route::post('/tests/{id}', 'AdministradorOperador\QuestionController@store')->name('testsid');

Route::resource('/tests/questions/answers', 'AdministradorOperador\AnswerController');
Route::get('/tests/questions/answers/create/{id}', 'AdministradorOperador\AnswerController@create');
Route::post('/tests/questions/{id}', 'AdministradorOperador\AnswerController@store');
