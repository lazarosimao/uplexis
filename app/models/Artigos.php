<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Artigos extends Model
{
    protected $table = 'artigos';

    protected $fillable = [
        'id', 'id_usuario', 'titulo', 'link'
    ];

    public function usuario()
    {
        return $this->belongsTo('App\models\Usuario', 'id_usuario', 'id');
    }
}
