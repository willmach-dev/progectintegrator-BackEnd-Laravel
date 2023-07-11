<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Customer extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $users = DB::table('customers')->get();
        return $users;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {
        //return $request->all(); pra testar o bagulho
        $users = DB::table('customers')->insert([
           'name' => $request['name'],
           'email' => $request ['email'],
           'password' => Hash::make($request['password']),
           'cpf' =>$request['cpf'],
        ]);


        return $users;
    }
    public function show(string $id)
    {
        $users = DB::table('customers')->where('ID', $id)->first();
        if(empty ($users)){
            abort(404);
        }
        return $users;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = DB::table('customers')->where
        ('ID',$id)->update([
            'name' => $request['name'],
           'email' => $request ['email'],
           'password' => Hash::make($request['password']),
           'cpf' =>$request['cpf'],
        ]);
        return $users;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = DB::table('customers')->where('ID', $id)->delete();
        if(empty ($users)){
            abort(404);
        }
        return $users;
    }
}
