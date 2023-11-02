<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghargaan extends Model
{
    use HasFactory;
    protected $table = 'penghargaan';

    protected $fillable = [
        'nama_penghargaan',
    ];

    public function mapel()
    {
        return $this->hasMany(Mapel::class);
    }
}
