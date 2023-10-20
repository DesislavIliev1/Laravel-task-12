<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    protected $fillable = [
        'name',
        'model',
        'color',
    ];

    public function user(){
        return $this->hasOne(CarUser::class);

    }
    use HasFactory;
}
