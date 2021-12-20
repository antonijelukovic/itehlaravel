<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Servis;
use App\Models\Klijent;

class Vozilo extends Model
{
    use HasFactory;

    public function servisi()
    {
        return $this->hasMany(Servis::class);
    }

    public function klijent()
    {
        return $this->belongsTo(Klijent::class);
    }
}