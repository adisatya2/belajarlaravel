<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EdulevelController extends Controller
{
    public function data()
    {
        $edulevels = DB::table('edulevels')->get();

        //dd($edulevels);
        //return view('edulevel.data', ['edulevels' => $edulevels]);
        //return view('edulevel.data', compact('edulevels'));
        return view('edulevel.data')->with('edulevels', $edulevels);
    }

    public function add(){
        return view('edulevel.add');
    }
}
