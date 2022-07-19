<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satker extends Model
{
    use HasFactory;

    protected $table = 'satker';
    protected $primarykey = 'id';
    protected $fillable = [
        'nama_satker',
        'alamat_saker',
        'notelp_satker',
        'pj_satker'
    ];
}
