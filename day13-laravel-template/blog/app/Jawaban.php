<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = "jawabans";
    protected $guarded = [];

    public function pertanyaan()
    {
        return $this->belongsTo('App\pertanyaan', 'pertanyaan_id');
    }

    public function profile()
    {
        return $this->belongsTo('App\Profile', 'profil_id');
    }

    
}
