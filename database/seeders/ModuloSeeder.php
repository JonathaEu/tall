<?php

namespace Database\Seeders;

use App\Models\Modulo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules = [
            [
                'nome' => 'Dashboard',
                'icone' => 'layout-dashboard',
                'ordenacao' => 1,
            ],
            [
                'nome' => 'Filiais',
                'icone' => 'building-2',
                'ordenacao' => 2,
            ],
        ];

        foreach ($modules as $module) {
            Modulo::updateOrCreate(
                $module
            );
        }
    }
}
