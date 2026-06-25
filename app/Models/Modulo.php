<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $nome
 * @property string $icone
 * @property int $ordenacao
 */
#[Fillable(['nome', 'icone', 'ordenacao'])]
class Modulo extends Model
{
    use HasUlids;

    public function telas()
    {
        return $this->hasMany(Tela::class);
    }
}
