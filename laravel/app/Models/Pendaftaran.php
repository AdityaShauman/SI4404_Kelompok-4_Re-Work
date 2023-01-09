<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'id_user',
        'id_pelatihan',
        'status',
        'bukti_pembayaran'
    ];

    public function User()
    {
        return $this->belongsTo(User::class,'id_user');
    }
    public function Pelatihan()
    {
        return $this->belongsTo(Pelatihan::class,'id_pelatihan');
    }
}
