<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table='event';
    protected $fillable=['tanggal_event','nama_event','lokasi_event'];
}
