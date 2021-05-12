<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lagu extends Model
{
    protected $table = 'lagu';

    protected $fillable = [
        'artis_id',
        'judul',
        'chord',
    ];

    public function artis(){
        return $this->belongsTo('App\Artis', 'artis_id', 'id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
