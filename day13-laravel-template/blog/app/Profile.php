<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "profils";
    protected $guarded = [];

    //one_nya|| satu profil mempunyai banyak pertanyaan || one to many || reference ke pertayaan penanya
    public function pertanyaan()
    {
        return $this->hasMany('App\pertanyaan', 'profil_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
