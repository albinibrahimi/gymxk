<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'image', 'muscleid'
    ];

    public function muscle()
    {
        return $this->belongsTo(Muscle::class);
    }

    public function session()
    {
        return $this->belongsTo(Session::class, 'partid');
    }
}
