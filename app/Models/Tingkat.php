<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tingkat extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function pesertadidik()
    {
        return $this->hasMany('App\Tingkat', 'id');
    }
}
