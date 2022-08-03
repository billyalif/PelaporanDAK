<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;

    protected $table = 'tabel_bidang';
    protected $primaryKey = 'id';
    protected $fillables = [
        'nama_bidang',
        'total_anggaran_bidang'
    ];

    //relationship
    public function Satker(){
        //just having one batch
        return $this->belongsTo(Satker::class, 'FK_id_satker', 'id');
    }

    public function Subbidang(){
        //just having one dak
        return $this->hasMany(Subbidang::class,'FK_id_sub', 'id');
    }


}
?>
