<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public function kelas()
    {
        return $this->BelongsTo('App\Kelas', 'id_kelas');
    }

}
    //belongsTo artinya tabel yang tuju