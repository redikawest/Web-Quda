<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $table='header';
    protected $fillable=['tanggal_head','judul_head','gambar_head'];
}
