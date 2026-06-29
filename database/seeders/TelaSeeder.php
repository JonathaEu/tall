<?php

namespace Database\Seeders;

use App\Models\Modulo;
use App\Models\Permission;
use App\Models\Tela;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TelaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dashboard = Modulo::where('nome', 'dashboard')->first();
        $filial = Modulo::where('nome', 'filiais')->first();

        $screens = [
            [
                'modulo' => $dashboard,
                'permission' => 'dashboard.index',
                'nome' => 'Dashboard',
                'rota_modulo_tela' => 'dashboard.index',
                'icone' => 'layout-dashboard',
                'ordenacao' => 1,
            ],
            [
                'modulo' => $filial,
                'permission' => 'filial.index',
                'nome' => 'Filiais',
                'rota_modulo_tela' => 'filial.index',
                'icone' => 'building-2',
                'ordenacao' => 1,
            ],
        ];

        foreach ($screens as $screen) {
            $permission = Permission::findByName($screen['permission']);

            Tela::updateOrCreate(
                ['rota_modulo_tela' => $screen['rota_modulo_tela']],
                [
                    'modulo_id' => $screen['modulo']->id,
                    'permission_id' => $permission->id,
                    'nome' => $screen['nome'],
                    'icone' => $screen['icone'],
                    'ordenacao' => $screen['ordenacao'],
                ]
            );
        }
    }
}
