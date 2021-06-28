<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected $table = 'sensors';
    protected $fillable = [
        'ph','kelembapan','created_at','kondisi_ph','kondisi_kelembapan','updated_at',
     ];
}
