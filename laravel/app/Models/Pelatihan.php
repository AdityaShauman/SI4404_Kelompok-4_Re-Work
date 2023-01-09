<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'nama',
        'deskripsi',
        'media',
        'harga'
    ];

    public function Pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}

