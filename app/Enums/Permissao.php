<?php

namespace App\Core\Enums;

enum Permissao: string
{
    // Módulo de Usuários
    case USUARIO_VIEW = 'usuario.view';
    case USUARIO_CREATE = 'usuario.create';
    case USUARIO_EDIT = 'usuario.edit';
    case USUARIO_DELETE = 'usuario.delete';

        // Dashboard
    case DASHBOARD_VIEW = 'dashboard.view';
}
