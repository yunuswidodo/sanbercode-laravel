<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    public function create()
    {
        return view('pertanyaan.formpertanyaan');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // required = tidak bole kosong|| untuk validasi
        $request->validate([
            'judul' => 'required|unique:pertanyaans',
            'isi' => 'required'
        ]);
        // untuk insert data
        $query = DB::table('pertanyaans')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
        ]);
        // redirec dengan pesan
        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil disimpan');
    }

    public function index()
    {
        // ambil data|| paling kiri adalah var
        $pertanyaans = DB::table('pertanyaans')->get(); // select * from
        // dd($pertanyaans);
        return view('pertanyaan.index', compact('pertanyaans'));
    }

    //$id = param
    public function show($id)
    {
        $pertanyaans = DB::table('pertanyaans')->where('id', $id)->first();  // select from .. where id = $id | first => tampilkan satu data object| kalao get menjadi colection array
        // dd($pertanyaans);
        return view('pertanyaan.show', compact('pertanyaans'));
    }

    //$id = param
    public function edit($id)
    {
        $pertanyaans = DB::table('pertanyaans')->where('id', $id)->first();
        // dd($pertanyaans);
        return view('pertanyaans.edit', compact('pertanyaan'));
    }
}
