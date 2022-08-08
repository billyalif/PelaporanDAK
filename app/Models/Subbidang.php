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
        'id_bidang',
        'nama_subbidang'
    ];

    //relationship
    public function Bidang(){
        return $this->belongsTo(Bidang::class, 'id_bidang', 'id');
    }
}
?>
