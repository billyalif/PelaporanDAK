<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelUser extends Model
{
    use HasFactory;

    protected  $table = 'tabel_user';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_user',
        'alamat_user',
        'notelp_user',
        'password_user',
        'username_user',
    ];

    //relationship
    public function Batch(){
        //just having one batch
        return $this->belongsTo(Role::class, 'FK_id_role', 'id');
    }


}
?>
