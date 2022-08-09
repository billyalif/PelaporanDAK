<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dak extends Model
{
    use HasFactory;

    protected $table = 'tabel_dak';
    protected $primarykey = 'id';
    protected $fillables = ['nama_dak'];

    //relationship
    public function Kegiatan(){
        return $this->hasMany(Kegiatan::class, 'id_dak');
    }

}
?>
