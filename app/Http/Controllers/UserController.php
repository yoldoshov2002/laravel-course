<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return response()->json([
            'name' => 'Umrzoq',
            'state' => 'CA',

        ]);
    }
    public function show($user){
        return view('test')-> with(['name' => 'Umrzoq', 'id' => $user]);
    }
    public function create(){
        return view('users.create');
    }
    public function store(Request $request){
        dd($request->email);
    }
}
