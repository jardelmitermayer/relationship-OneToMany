<?php

use App\Models\Categoria;
use App\Models\Produto;
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
            echo "<p>". $c->id."-". $c->nome ."</p>";
        }
    }
});
Route::get('produtos', function () {
    $prods = Produto::all();
    if (count($prods) === 0) {
        echo "<h4>Você não possui nenhuma categoria cadastrada</h4>";
    }
    else{
        echo "<table>";
        echo "<thead><tr><td>Nome</td><td>Estoque</td><td>Preco</td><td>Categoria</td><tr></thead>";
        
        foreach($prods as $prod){
            echo "<tr>";
            echo "<td>". $prod->nome . "</td>";
            echo "<td>". $prod->estoque . "</td>";
            echo "<td>". $prod->preco . "</td>";
            echo "<td>". $prod->categoria->nome. "</td>";
            echo "</tr>";
        }
    }
});
Route::get('categoriasprodutos', function () {
    $cat = Categoria::all();
    if (count($cat) === 0) {
        echo "<h4>Você não possui nenhuma categoria cadastrada</h4>";
    }
    else{
        foreach($cat as $c){
            echo "<p>". $c->id."-". $c->nome ."</p>";
            $produtos = $c->produtos;
        
            if(count($produtos) >0 ){
                echo "<ul>";
                foreach($produtos as $p){
                    echo "<li>". $p->nome . "</li>";
                }
                echo "</ul>";
            }
        }
    }
});

Route::get('categoriasprodutos/json', function () {
    $cats = Categoria::with('produtos')->get();
    return $cats->toJson();
});