<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class contactcontroller extends Controller
{
    public function index() {
        $data = DB::table('email')->get();
        return view('/template/contact' , [ 
            "title" => "Contact", 
            'items' => $data
        ]);

    }

    public function store(Request $request){
        DB::table('email') -> insert(['email' => $request -> email]);
        return redirect()->back();
    }
}
