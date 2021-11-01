<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operacao extends Model
{
    use HasFactory;

    protected $fillable = ['tag_id', 'funcionario_id', 'antena_id'];

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class);
    }

    public function antena()
    {
        return $this->belongsTo(Antena::class);
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
