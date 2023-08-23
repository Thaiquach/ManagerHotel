<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $table = 'hotels'; // this is the table name
    protected $fillable = ['name', 'address', 'phone']; // these are the fields that can be filled
    // public function room()
    // {
    //     return $this->belongsToMany(Room::class);
    // }
    // public function book()
    // {
    //     return $this->hasMany(Booking::class);
    // }
}
