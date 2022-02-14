<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function index()
    {
        return view('ajax.index');
    }
    
    
    
    public function store(Request $request)
    {
    
        $name = $request-> name;
        $soname = $request -> soname;
        $email = $request -> email;

        return response()->json(['success'=>'Данные успешно отправленны', $name, $soname, $email]);

    }
}
