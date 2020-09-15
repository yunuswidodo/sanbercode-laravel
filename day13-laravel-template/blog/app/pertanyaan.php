<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// otomatis mencari database pertanyaans
class pertanyaan extends Model
{
    protected $table = "pertanyaans";  // memakasa ketabel nama ini

    protected $fillable = ["judul", "isi"]; // menentukan colom yang boleh disi || khusus mass Assigment
    protected $guarded = []; // kabilkan fillable => kolom mana aja yang tidak boleh diisi|| kalao  [] // semua bolah diisi
}
