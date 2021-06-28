<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratadata extends Model
{
    protected $table = 'ratadatas';
    protected $fillable = [
        'ph','kelembapan','created_at','kondisi_ph','kondisi_kelembapan','updated_at',
     ];
}
