<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;
    protected $table = 'rooms'; // this is the table name
    protected $fillable = ['hotel_id', 'guest_id', 'number', 'types', 'price'];
    public function discounts()
    {
        return $this->belongsToMany(Discount::class);
    }

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }

    public function guests()
    {
        return $this->hasMany(Guest::class);
    }
}
