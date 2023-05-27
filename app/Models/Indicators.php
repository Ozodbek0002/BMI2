<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicators extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'count',
        'w_count',
        'mahalla_id',
    ];

    public function mahalla()
    {
        return $this->belongsTo(Mahalla::class);
    }


}
