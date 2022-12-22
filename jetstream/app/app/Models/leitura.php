<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leitura extends Model
{
    use HasFactory;
    protected $fillable = ['EPC', 'Data', 'company_id'];
}
