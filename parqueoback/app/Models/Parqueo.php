<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parqueo extends Model
{
    use HasFactory;
    protected $fillable=[
        'placa',
        'conductor',
        'nivel',
        'carril',
        'fechaingreso',
        'horaingreso',
        'fechasalida',
        'horasalida',
        'ci',
        'celular'
    ];
}
