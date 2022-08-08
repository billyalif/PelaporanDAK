<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;

    protected $table = 'tabel_bidang';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_satker',
        'nama_bidang',
        'pj_bidang'
    ];

    //relationship
    public function Satker(){
        //just having one satker
        return $this->belongsTo(Satker::class, 'id_satker', 'id');
    }

    public function Subbidang(){
        // having many subbid
        return $this->hasMany(Subbidang::class,'id_sub', 'id');
    }


}
?>
