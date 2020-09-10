<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horse extends Model
{
    protected $table='horse';
    protected $fillable=['kd_kuda','nama_kuda','st_kuda','jk_kuda','wr_kuda','pj_kuda','in_kuda','tl_kuda','np_kuda','nc_kuda','gb_kuda'];

    public function member()
    {
      return $this->belongsToMany(Member::class);
    }
}
