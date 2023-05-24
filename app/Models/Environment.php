<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Environment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'count',
        'w_count',
        'y_count',
        'mahalla_id'
    ];

    public function mahalla()
    {
        return $this->belongsTo(Mahalla::class);
    }

}
