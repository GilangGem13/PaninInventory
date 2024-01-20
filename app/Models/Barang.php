<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'table_list_barang';
    protected $fillable = [
        'Id','Nama_Barang','Jumlah_Barang'
    ];
}
