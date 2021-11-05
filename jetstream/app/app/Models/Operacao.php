<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operacao extends Model
{
    use HasFactory;

    protected $fillable = ['tipo', 'tag_id', 'user_id', 'antena_id'];

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
