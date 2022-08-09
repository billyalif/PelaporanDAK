<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'tabel_kegiatan';
    protected $primarykey = 'id';
    protected $fillable = [
        'nama_kegiatan',
        'deskripsi_kegiatan',
        'volume',
        'satuan',
        'jumlah_penerima_manfaat',
        'pagu_diterima',
        'pagu_dibelanjakan',
        'metode_pembayaran',
        'keterangan',
        'id_dak',
        'id_batch',
        'id_subbidang'
    ];

    //relationship

    public function Subbidang(){
        return $this->belongsTo(Subbidang::class, 'FK_id_sub', 'id');
    }

    public function Batch(){
        //just having one batch
        return $this->belongsTo(Batch::class, 'FK_id_batch', 'id');
    }

    public function Dak(){
        //just having one dak
        return $this->belongsTo(Dak::class,'FK_id_dak', 'id');
    }
}

?>
