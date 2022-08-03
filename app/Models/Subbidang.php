<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subbidang extends Model
{
    use HasFactory;

    protected $table = 'tabel_subbidang';
    protected $primarykey = 'id';
    protected $fillable = [
        'nama_subbidang',
        'deskripsi_subbidang'
    ];

    //relationship
    public function Bidang(){
        return $this->belongsTo(Bidang::class, 'FK_id_bidang', 'id');
    }
}
?>
