<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satker extends Model
{
    use HasFactory;

    protected $table = 'tabel_satker';
    protected $primarykey = 'id';
    protected $fillable = [
        'id_user',
        'nama_satker',
        'alamat_satker',
        'notelp_satker',
        'pj_satker'
    ];

    public function User(){
        return $this->belongsTo('App\Models\User','id_user','id');
    }

    public function bidang(){
        return $this->hasMany('App\Models\Bidang','id_satker','id');
    }
}
