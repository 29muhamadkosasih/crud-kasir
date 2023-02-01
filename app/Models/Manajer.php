<?php

namespace App\Models;

use App\Models\Kasir;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manajer extends Model
{
    use HasFactory;
    protected $table='menu';
    protected $guarded=[''];

    public function manajer()
    {
        return $this->hasMany(Kasir::class);
    }

}
