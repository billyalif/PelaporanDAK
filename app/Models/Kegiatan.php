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
        'nama-kegiatan',
        'deskripsi_kegiatan'

    ];

    //relationship
    public function Anggaran(){
        return $this->belongsTo(Anggaran::class, 'FK_id_anggaran', 'id');
    }

    public function Subbidang(){
        return $this->belongsTo(Subbidang::class, 'FK_id_sub', 'id');
    }

}

?>
