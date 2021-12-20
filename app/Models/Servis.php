<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vozilo;

class Servis extends Model
{
    use HasFactory;

    public function vozila()
    {
        return $this->hasMany(Vozilo::class);
    }
}
