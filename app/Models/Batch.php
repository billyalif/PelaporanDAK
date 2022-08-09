<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;

    protected  $table = 'tabel_batch';
    protected $primaryKey = 'id';
    protected $fillable = [
        'triwulan_batch',
        'tahun_batch'
    ];

    //relationship
    public function Kegiatan(){
        //many
        return $this->hasMany(Kegiatan::class, 'id_batch', 'id');
    }
}

?>
