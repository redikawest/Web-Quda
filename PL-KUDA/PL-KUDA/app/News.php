<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table='news';
    protected $fillable=['gb_berita','tg_berita','jd_berita','is_berita'];
}
