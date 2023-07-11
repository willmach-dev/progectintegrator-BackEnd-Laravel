<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Produtos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $products = DB::table('produtos')->get();
        return $products;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {
        //return $request->all(); pra testar o bagulho
        $products = DB::table('produtos')->insert([
            'nome_produto' => $request['nome_produto'],
           'descricao_produto' => $request ['descricao_produto'],
           'valor' => $request['valor'],
           'quantidade' =>$request['quantidade'],
           'un_medida' =>$request['un_medida'],
        ]);
        //$product = new Produt

        return $products;
    }
    public function show(string $id)
    {
        $products = DB::table('produtos')->where('ID', $id)->first();
        if(empty ($products)){
            abort(404);
        }
        return $products;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $products = DB::table('produtos')->where
        ('ID',$id)->update([
            'nome_produto' => $request['nome_produto'],
           'descricao_produto' => $request ['descricao_produto'],
           'valor' => $request['valor'],
           'quantidade' =>$request['quantidade'],
           'un_medida' =>$request['un_medida'],
        ]);
        return $products;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = DB::table('produtos')->where('ID', $id)->delete();
        if(empty ($products)){
            abort(404);
        }
        return $products;
    }
}
