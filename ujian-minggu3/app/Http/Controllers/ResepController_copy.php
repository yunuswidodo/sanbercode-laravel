<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResepController_copy extends Controller
{
    public function index()
    {
        return view('resep.index');
    }

    public function Create()
    {
        return view('resep.create');
    }

    public function Store(Request $request)
    {
        // dd($request->all());
        $query = DB::table('reseps')->insert([
            "nama_masakan" => $request["nama"],
            "bahan" => $request["bahan"],
            "langkah" => $request["langkah"]
        ]);

        return redirect('/resep');
    }

    public function Tampilkan()
    {
        $query = DB::table('reseps')->get();
        return view('resep.tampilkandata', compact('query'));
    }

    public function Detail($id)
    {
        $query = DB::table('reseps')->where('id', $id)->first();
        return view('resep.detail', compact('query'));
    }

    public function Edit($id)
    {
        $query = DB::table('reseps')->where('id', $id)->first();
        return view('resep.edit', compact('query'));
    }

    public function Update($id, Request $request)
    {
        $query = DB::table('reseps')
            ->where('id', $id)
            ->update([
                'nama_masakan' => $request['nama'],
                'bahan' => $request['bahan'],
                'langkah' => $request['langkah']
            ]);

        return redirect('/resep');
    }

    public function Destroy($id)
    {
        $query  = DB::table('reseps')->where('id', $id)->delete();
        return redirect('/resep');
    }
}
