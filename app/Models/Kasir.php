<?php

namespace App\Models;

use App\Models\Manajer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Kasir extends Model
{
    use HasFactory;
    protected $table='transaksi';
    protected $guarded=[''];


    public function manajer()
    {
        return $this->belongsTo(Manajer::class, 'nama_menus');
    }


}
