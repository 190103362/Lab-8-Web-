<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;

class UserController extends Controller
{
    //
    public function index()
    {
        //
        $rauan = UsersModel::all();
        return view('newForm')->with(['rauan'=>$rauan]);
    }
     public function store(Request $request)
    {
        //

       $post = new UsersModel();
        $post->Name = $request->input('Name');
        $post->Surname = $request->input('Surname');
        $post->Email = $request->input('Email');
        if($request->hasFile('Photo')){
            $file = $request->file('Photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'.  $extension;
            $file->move('uploads' , $filename);
            $post->Photo = $filename;
        }else{
            return 0;
        }
        $post->save();
        return 'You have successfully submitted:)';
    }
}