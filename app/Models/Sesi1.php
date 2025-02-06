<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sesi1 extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'sesi1';

    protected $fillable = [
        'nama_tiket',
        'stok',
        'lokasi'
    ];

    public function pendaftar()
    {
        return $this->belongsTo(Pendaftar::class, 'id', 'sesi1');
    }
}
