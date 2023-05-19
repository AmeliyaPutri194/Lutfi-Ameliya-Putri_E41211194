<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanian extends Model
{
    protected $table = 'pengalaman_kerja';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama tanaman', 'hasil panen', 'lama tanam', 'tanggal tanam',
    ];
}
