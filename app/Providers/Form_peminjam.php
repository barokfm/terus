<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_peminjam extends Model
{

    protected $fillable = [
        'name',
        'pekerjaan',
        'alamat',
        'no_hp',
        'keperluan',
        'tgl_acara',
        'waktu',
    ];

    protected $ignored = [
        'id',
        'foto_ktp',
    ];
}
