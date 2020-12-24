<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tourism extends Model
{
    protected $table="tourisms";
    protected $primaryKey="id_tourism";
    protected $fillable=[
        'id_tourism','judul','description_tourism','fk_user_id','photos1_tourism'
    ];
}
