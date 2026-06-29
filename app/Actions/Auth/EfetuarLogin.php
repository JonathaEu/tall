<?php

namespace App\Actions\Auth;

use App\DTOs\Auth\Request\DadosLogin;
use Exception;
use Illuminate\Support\Facades\Auth;

class EfetuarLogin
{
    public function execute(DadosLogin $dadosLogin)
    {
        try {
            return Auth::attempt([
                'email' => $dadosLogin->email,
                'password' => $dadosLogin->password
            ]);
        } catch (Exception $e) {
            throw $e;
        }
    }
}
