<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;

    protected  $table = 'batch';
    protected $primaryKey = 'id';
    protected $fillables = [
        'triwulan_batch',
        'tahun_batch'
    ];

    //relationship
    public function Anggaran(){
        //many
        return $this->hasMany(Anggaran::class, 'id_batch', 'id');
    }
}

?>
