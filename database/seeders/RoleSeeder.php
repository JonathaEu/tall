<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cargos = [
            [
                'name' => 'admin',
                'guard_name' => 'web'
            ],
            [
                'name' => 'proprietario',
                'guard_name' => 'web'
            ],
            [
                'name' => 'gerente',
                'guard_name' => 'web'
            ],
            [
                'name' => 'funcionario',
                'guard_name' => 'web'
            ],
        ];

        foreach ($cargos as $cargo) {
            Role::updateOrCreate($cargo);
        }
    }
}
