<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tourism_pic extends Model
{
    protected $table = "tourism_pics";

    protected $primaryKey = "id_pics";

    protected $fillable = [
        'id_pics', 'title', 'pics', 'fk_tourism_id'
    ];

    public function tourism()
    {
        return $this->belongsTo('App\Tourism');
    }
}
