<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $nome
 * @property string $modulo_tela_rota
 * @property string $icone
 * @property string $modulo_id
 * @property string $permission_id
 * @property int $ordenacao
 */
#[Fillable(['nome', 'modulo_tela_rota', 'icone', 'modulo_id', 'permission_id', 'ordenacao'])]
class Tela extends Model
{
    use HasUlids;

    public function modulo()
    {
        return $this->belongsTo(Modulo::class);
    }

    public function permissao()
    {
        return $this->belongsTo(Permission::class, 'permissao_id');
    }
}
