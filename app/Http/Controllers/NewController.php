<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UsersModel;    

class NewController extends Controller
{
    public function index(){
        $clients = UsersModel::all();
        
        return view('client.index')->with(['clients'=> $clients]);

    }
    public function store(Request $request){
        UsersModel::create([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return back();
    }
    public function get_client($id){
        $client = UsersModel::find($id);
        if($client == null)
        return response(['message' => 'client not found'],404);

        return view('client.detail')->with(['client' => $client]);
    }
}