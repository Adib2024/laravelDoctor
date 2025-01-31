<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctors';
    protected $fillable = ['name', 'phone', 'images'];



    public function pemeriksaan()
    {                         //kena sama dgn dlm models
        return $this->hasMany(Pemeriksaan::class);
    }
}
