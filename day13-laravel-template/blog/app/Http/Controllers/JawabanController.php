<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\pertanyaan;
use App\Jawaban;
use Auth;

class JawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($pertanyaan_id, Request $request)
    // setiap pertanyaan memiliki banyak jawaban
    {
        $pertanyaan = pertanyaan::find($pertanyaan_id);
        // dd($pertanyaan);
        $jawaban = new Jawaban;
        $jawaban->isi = $request['isi'];

        // jawaban_id dapat dari mana

        $jawaban->profil_id = Auth::user()->profile->id;  // penjawab

        $jawaban->pertanyaan_id = $pertanyaan_id;

        $jawaban->save();

        return redirect()->route('pertanyaan.show', ['pertanyaan' => $pertanyaan_id]); // redierec yang idnya => pertanyaan id

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
