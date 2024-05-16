<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Method extends Model
{
    use HasFactory;

    const ENABLED_METHODS = [
        'BCAVA', 
        'PERMATAVA', 
        'BNIVA', 
        'BRIVA', 
        'MANDIRIVA', 
        'CIMBVA', 
        'SAMPOERNAVA', 
        'DANAMONVA', 
        'QRISC', 
        'QRIS', 
        'QRIS2'
    ];

    protected $guarded = [];

    public function scopeEnabledMethods()
    {
        return $this->whereIn('code', self::ENABLED_METHODS)->get();
    }
}
