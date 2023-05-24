<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informations extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'position',
        'address',
        'phone',
        'mahalla_id',
    ];

    public function mahalla()
    {
        return $this->belongsTo(Mahalla::class);
    }
}
