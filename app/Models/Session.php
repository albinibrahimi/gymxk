<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $fillable = [
        'weight', 'reps', 'partid','date'
    ];
    public $timestamps = false;

    public function parts()
    {
        return $this->hasMany(Part::class,'id');
    }
}
