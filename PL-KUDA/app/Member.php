<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table='member';
    protected $fillable=['nm_depan','nm_belakang','jk_member','al_member','user_id','nm_club','gb_member'];


    public function getAvatar(){
        if (!$this->gb_member) {
          return asset('images/default.jpg');  
        }
        return asset('images/'.$this->gb_member);
    }
    public function horse()
    {
      return $this->belongsToMany(Horse::class);
    }
}
