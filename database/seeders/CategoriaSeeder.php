<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
        DB::table( 'categorias' )->insert( [ 'nome' => 'Roupas' ] );
        DB::table( 'categorias' )->insert( [ 'nome' => 'Eletrônicos' ] );
        DB::table( 'categorias' )->insert( [ 'nome' => 'Perfumes' ] );
        DB::table( 'categorias' )->insert( [ 'nome' => 'Móveis' ] );
        DB::table( 'categorias' )->insert( [ 'nome' => 'Alimentos' ] );
        DB::table( 'categorias' )->insert( [ 'nome' => 'Informática' ] );
 
    }
   
 
}
 


