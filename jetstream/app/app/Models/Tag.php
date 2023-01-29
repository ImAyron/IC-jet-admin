<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $primaryKey = 'codigo';
    public $incrementing = false;
    protected $fillable = ['codigo','dataFab','item_id'];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }


}
