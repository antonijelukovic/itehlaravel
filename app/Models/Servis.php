<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vozilo;

class Servis extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'grad',
        'adresa',
        'broj_zaposlenih',
        'website'
    ];

    public function vozila()
    {
        return $this->hasMany(Vozilo::class);
    }
}
