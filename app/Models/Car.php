<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'title', 'slug', 'price', 'thumbnail', 'mill', 'transmission', 'seats', 'fuel', 'description'
    ];
    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
