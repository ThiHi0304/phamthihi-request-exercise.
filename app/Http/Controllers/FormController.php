<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function Post(Request $request){
        $allData=$request->all();
        // dd($allData);
        $name = $request->input('name');
        $username = $request->input('username');
        $password=$request->input('password');
        return view('result',['name' => $name, 'username' => $username,'password'=>$password] );
    }
    
}
