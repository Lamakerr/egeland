<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return view('tasks3.index');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->vk_url = $request->vk_url;
        $user->email = $request->email;
        $user->save();


        return 'Данные получены и зипасаны в базу!';

    }

    public function show()
    {
        $userlogs = DB::table('users')->get();

        return view('tasks3.show', compact('userlogs'));
    }


    
    public function getData()
    {
        $users = User::all();
        $user = User::with('tests')->get();
     

        return view('tasks3.data', compact('users', 'user'));
    }



}
