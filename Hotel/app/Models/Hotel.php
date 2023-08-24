<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $table = 'hotels'; // this is the table name
    protected $fillable = ['name', 'address', 'phone']; // these are the fields that can be filled
    public function rooms()
    {
        return $this->belongsTo(Room::class);
    }
}
