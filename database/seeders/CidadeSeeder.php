<?php

namespace Database\Seeders;

use App\Models\Cidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Cidade::factory()->create([
            'nome' => 'Goiânia',
            'estado' => 'Goias',
        ]);

        Cidade::factory()->create([
            'nome' => 'São Paulo',
            'estado' => 'São Paulo',
        ]);

        Cidade::factory()->create([
            'nome' => 'Rio de Janeiro',
            'estado' => 'Rio de Janeiro',
        ]);

        Cidade::factory()->create([
            'nome' => 'Brasilia',
            'estado' => 'Distrito Federal',
        ]);

        Cidade::factory()->create([
            'nome' => 'Belo Horizonte',
            'estado' => 'Minas Gerais',
        ]);

    }
}
