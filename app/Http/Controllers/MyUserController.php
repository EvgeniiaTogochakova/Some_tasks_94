<?php

namespace App\Http\Controllers;

use App\Models\MyUser;
use Illuminate\Http\Request;

class MyUserController extends Controller
{
    public function index()
    {
        return MyUser::all();
    }

    public function getForm()
    {
        return view('myUser');
    }

    public function get($id)
    {
        $user = MyUser::where('id', $id)->first();
        return $user;
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'surname' => 'required|max:50',
            'email' => 'email:rfc,dns'
        ]);

        return MyUser::create($request->all());
    }
}
