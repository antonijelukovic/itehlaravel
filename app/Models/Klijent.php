<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vozilo;

class Klijent extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'broj_telefona',
    ];

    public function vozila()
    {
        return $this->hasMany(Vozilo::class);
    }
}
