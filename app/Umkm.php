<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    protected $table = "umkms";
    protected $primaryKey = "id_umkm";
    protected $fillable = [
        'id_umkm', 'judul', 'description_umkm', 'fk_user_id', 'photos1_umkm'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
