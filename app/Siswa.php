<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public function kelas()
    {
        return $this->BelongsTo('App\Kelas', 'id_kelas');
    }

    public function mapel()
    {
        return $this->BelongsToMany('App\Mapel',
        'mapel_siswa',
        'id_siswa',
        'id_mapel'
        );
    }
}
    //belongsTo artinya tabel yang tuju