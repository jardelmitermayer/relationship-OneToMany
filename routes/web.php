<?php

use App\Models\Categoria;
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

Route::get('categorias', function () {
    $cat = Categoria::all();
    if (count($cat) === 0) {
        echo "<h4>Você não possui nenhuma categoria cadastrada</h4>";
    }
    else{
        foreach($cat as $c){
            echo "<p>". $c->id."-". $c->nome ."/<p>";
        }
    }
});