<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phonenumber'];
    // public function book()
    // {
    //     return $this->hasMany(Booking::class);
    // }
}
