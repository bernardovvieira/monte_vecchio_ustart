<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frota extends Model
{
    use HasFactory;

    protected $table = 'frota';

    protected $fillable = [
        'marca',
        'ano',
        'modelo',
        'observacao',
        'usuario'
    ];

    public function usuario() {
        return $this->belongsTo('App\Models\User', 'usuario');
    }
}
