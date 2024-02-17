<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sesi2 extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'sesi2';

    protected $fillable = [
        'nama_tiket',
        'stok',
    ];

    public function pendaftar()
    {
        return $this->belongsTo(Pendaftar::class, 'id', 'sesi2');
    }
}
