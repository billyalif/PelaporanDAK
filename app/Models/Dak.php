<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dak extends Model
{
    use HasFactory;

    protected $table = 'dak';
    protected $primarykey = 'id';
    protected $fillables = ['nama_dak'];

    //relationship
    public function Anggaran(){
        return $this->hasMany(Anggaran::class, 'id_dak');
    }

}
?>
