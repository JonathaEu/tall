<?php

namespace App\Livewire\Shared;

use Livewire\Component;
use App\Models\Modulo;
use Illuminate\Support\Collection;

class Sidebar extends Component
{
    public Collection $modulos;

    /**
     * O método mount executa alguma instrução antes de renderizar o componente
     * @return void
     */
    public function mount()
    {
        $this->modulos = $this->buscaMenuPermitido();
    }

    protected function buscaMenuPermitido(): Collection
    {
        if (!auth()->check()) {
            return collect();
        }

        $usuario = auth()->user();
        // BASICAMENTE OS MÓDULOS VINCULADO COM AS TELAS QUE O USUÁRIO TEM ACESSO; INJETA TODOS OS MÓDULOS COM SUAS TELAS NA VARIÁVEL $MODULOS
        //  E EXPORTA PARA O COMPONENTE NO MÉTODO RENDER, BASTA SEGURAR CTRL E PRESSIONAR PARA IR AO COMPONENTE
        return Modulo::with('telas.permissao')->get()->map(function ($modulo) use ($usuario) {
            $modulo->telas = $modulo->telas->filter(function ($tela) use ($usuario) {
                return !$tela->permissao || $usuario->hasPermissionTo($tela->permissao->name);
            });
            return $modulo;
        })->filter(function ($modulo) {
            return $modulo->telas->isNotEmpty();
        });
    }

    public function render()
    {
        return view('shared.sidebar');
    }
}
