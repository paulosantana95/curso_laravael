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

	$nome = "Paulo";
	$idade = 29;

	$arr = [1, 2, 3, 4, 5];

	$nomes = ['Paulo', 'Matheus', 'Maria', 'João'];


	return view('welcome',
		[
			'nome' => $nome, 
			'idade' => $idade,
			'arr' => $arr,
			'nomes' => $nomes,
		]);
});

Route::get('/contact', function () {
		return view('contact');
});

Route::get('/products', function () {

	$search = request('search');

	return view('products', ['search' => $search]);
});

Route::get('/products/{id?}', function ($id = null) {
	return view('product', ['id' => $id]);
});

