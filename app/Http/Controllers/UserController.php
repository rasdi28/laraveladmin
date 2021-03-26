<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function data()
    {
        $anggota = DB::table('anggota')->get();
    //    dd($anggota);

        return view('users.data',compact('anggota'));
    }

    public function add()
    {
        return view('users.add');
    }

    public function addProcess(Request $request)
    {
        DB::table('anggota')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'jenjang'=>$request->jenjang
        ]);
        return redirect('users')->with('status', 'User berhasil ditambah');


    }

    public function edit($id)
    {
        $anggota = Db::table('anggota')-> where('id',$id)->first();
        // dd($anggota);
        return view('users.edit',compact('anggota'));

    }
    public function editProcess(Request $request, $id)
    {
        DB::table('anggota')->where('id',$id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'jenjang'=>$request->jenjang
        ]);
        return redirect('users')->with('status', 'Anggota berhasil diupdate');

    }

    public function delete($id)
    {
        DB::table('anggota')->where('id',$id)->delete();
        return redirect('users')->with('status', 'Users berhasil diHapus');

    }
}
