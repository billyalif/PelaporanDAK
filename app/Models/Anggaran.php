<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Anggaran extends Model{

    use HasFactory;

    protected  $table = 'tabel_anggaran';
    protected $primaryKey = 'id';
    protected $fillables = [
        'jenis_anggaran',
        'volume',
        'satuan',
        
        'harga_satuan',
        'jumlah_penerima_manfaat',
        'pagu_diterima',
        'pagu_dibelanjakan'
    ];

    //relationship
    public function Batch(){
        //just having one batch
        return $this->belongsTo(Batch::class, 'FK_id_batch', 'id');
    }

    public function Dak(){
        //just having one dak
        return $this->belongsTo(Dak::class,'FK_id_dak', 'id');
    }

    public function Kegiatan(){
        //just having one kegiatan
        return $this->belongsTo(Kegiatan::class, 'FK_id_kegiatan', 'id');
    }

}
?>
