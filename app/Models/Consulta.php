<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consulta extends Model
{
    use HasFactory;

    protected $fillable = [
        'medico_id',
        'paciente_id',
        'dt_consulta'
    ];
}
