<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EdulevelController extends Controller
{
    public function data()
    {
        $edulevels = DB::table('edulevels')->get();
        // return $edulevels;
        // return view('edulevels.data', ['edulevels' => $edulevels]);
        // dd($edulevels);
        //pakai compact harus sama nilainya
        return view('edulevels.data', compact('edulevels'));
    }
    public function add()
    {
        return view('edulevels.add');
    }

    public function addProcess(Request $request)
    {
        DB::table('edulevels')->insert([
            'name' => $request->name,
            'desc' => $request->desc
        ]);
        return redirect('edulevels')->with('status', 'Jenjang berhasil ditambah');
    }
}
