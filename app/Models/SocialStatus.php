<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'count',
        'mahalla_id'
    ];

    public function mahalla()
    {
        return $this->belongsTo(Mahalla::class);
    }


}
