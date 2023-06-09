<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahalla extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }


    public function informations()
    {
        return $this->hasMany(Informations::class);
    }


    public function employments()
    {
        return $this->hasMany(Employment::class);
    }

    public function statuses()
    {
        return $this->hasMany(SocialStatus::class);
    }

    public function indicators(){
        return $this->hasMany(Indicators::class);
    }

    public function environments()
    {
        return $this->hasMany(Environment::class);
    }

}
