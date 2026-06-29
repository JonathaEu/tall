<?php

namespace App\Livewire\Login;

use App\Actions\Auth\EfetuarLogin;
use App\DTOs\Auth\Request\DadosLogin;
use Livewire\Component;

class TelaLogin extends Component
{
    public string $email = '';
    public string $password = '';

    public function rules()
    {
        return DadosLogin::getValidationRules([]);
    }
    public function tentarAutenticar(EfetuarLogin $efetuarLogin)
    {
        $dadosValidados = $this->validate();
        $dadosLogin = DadosLogin::from($dadosValidados);

        if (!$efetuarLogin->execute($dadosLogin)) {
            return back()->withErrors(['email' => 'Dados inválidos']);
        }

        session()->regenerate();

        session()->put('teste', 'abc');

        return redirect()->route('dashboard.index');
    }
    public function render()
    {
        return view('pages.login')->layout('layouts.visitante');
    }
}
