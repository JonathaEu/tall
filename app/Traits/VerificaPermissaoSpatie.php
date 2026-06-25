<?php

namespace App\Traits;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Gate;

trait VerificaPermissaoSpatie
{
    /**
     * O Livewire executa automaticamente qualquer método que comece com 'boot' 
     * seguido pelo nome exato da Trait.
     * 
     * removi o prefixo boot pois ao entrar em uma tela que não tivesse permissão de cadastro já ejetava 403
     * a ideia agora é executar a trait em momentos oportunos, como abertura de modal ou envio de formulário etc.
     */
    public function verificaPermissaoSpatie()
    {
        if (property_exists($this, 'permissaoObrigatoria')) {
            // Se for um Enum, pegamos o ->value (string), se for string, usamos direto
            $permissao = $this->permissaoObrigatoria instanceof \BackedEnum
                ? $this->permissaoObrigatoria->value
                : $this->permissaoObrigatoria;

            if (! Gate::allows($permissao)) {
                throw new AuthorizationException('Você não possui autorização para executar esta ação.');
            }
        }
    }
}
