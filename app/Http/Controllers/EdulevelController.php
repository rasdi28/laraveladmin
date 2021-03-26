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
        $request->validate([
            'name'=>'required|min:2',
            'desc'=>'required'],[
            'name.required'=>'Nama Jenjang Tidak Boleh Kosong'
            
        ]);
        DB::table('edulevels')->insert([
            'name' => $request->name,
            'desc' => $request->desc
        ]);
        return redirect('edulevels')->with('status', 'Jenjang berhasil ditambah');
    }
    
    public function edit($id)
    {
        //lempar data untuk menampilkan hasil edit
        $edulevel = DB::table ('edulevels')-> where('id',$id)->first();

        //dd jika ragu
        // dd($edulevel);
        return view('edulevels.edit',compact('edulevel'));
    }

    public function editProcess(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|min:2',
            'desc'=>'required'],[
                'name.required'=>'Nama Jenjang Tidak Boleh Kosong'
            
        ]);
        DB::table ('edulevels')-> where('id',$id)
        ->update([
            'name'=> $request->name,
            'desc'=>$request->desc
        ]);
        return redirect('edulevels')->with('status', 'Jenjang berhasil diupdate');

    }

    public function delete($id)
    {
        DB::table('edulevels')-> where('id',$id)->delete();
        return redirect('edulevels')->with('status', 'Jenjang berhasil diHapus');
    }

}
