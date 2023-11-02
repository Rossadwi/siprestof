<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kompetisi extends Model
{
    use HasFactory;
    protected $table = 'kompetisi';

    protected $fillable = [
        'nama_kompetisi',
    ];

    public function mapel()
    {
        return $this->hasMany(Kompetisi::class);
    }
}
