<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paciente extends Model
{
    //
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nome',
        'cpf',
        'celular'
    ];

    public function medicos()
    {
        return $this->belongsToMany(Medico::class, 'consultas', 'paciente_id', 'medico_id')->withTimestamps();
    }
}
