<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $fillable = ['mapel'];

    public function kelas()
    {
        // return $this->BelongsToMany('App\Kelas',
        // 'mapel_siswa',
        // 'id_mapel',
        // 'id_kelas'
        // );
    }
}