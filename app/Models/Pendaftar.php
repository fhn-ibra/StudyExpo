<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pendaftar';
    protected $fillable = [
        'nama',
        'kelas',
        'no',
        'sesi1',
        'sesi2',
        'id_user',
    ];

    public function sesiSatu()
    {
        return $this->belongsTo(Sesi1::class, 'sesi1', 'id');
    }

    public function sesiDua()
    {
        return $this->belongsTo(Sesi2::class, 'sesi2', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

}
