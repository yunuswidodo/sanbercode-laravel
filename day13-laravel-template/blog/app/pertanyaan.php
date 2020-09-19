<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// otomatis mencari database pertanyaans
class pertanyaan extends Model
{
    protected $table = "pertanyaans";  // memakasa ketabel nama ini

    protected $fillable = ["judul", "isi"]; // menentukan colom yang boleh disi || khusus mass Assigment
    protected $guarded = []; // kabilkan fillable => kolom mana aja yang tidak boleh diisi|| kalao  [] // semua bolah diisi

    public function penanya() // ke pertanyaan
    {
        return $this->belongsTo('App\Profile', 'profil_id');   // kalao mau langsung (tanpa param ke 2) baca set database profile_id
    }

    public function jawaban()
    {
        return $this->hasMany('App\Jawaban', 'pertanyaan_id');
    }

    public function jawaban_tepat() // tidak jadi kecewa
    {
        return $this->belongsTo('App\Jawaban', 'jawaban_tepat_id');
    }
}
