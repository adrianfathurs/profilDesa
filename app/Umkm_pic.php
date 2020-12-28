<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Umkm_pic extends Model
{
     protected $table = "umkm_pics";
    protected $primaryKey = "id_umkm_pic";
    protected $fillable = [
        'id_umkm_pic', 'title', 'pics', 'fk_umkm_id', 
    ];

    public function umkm()
    {
        return $this->belongsTo('App\Umkm');
    }
}
