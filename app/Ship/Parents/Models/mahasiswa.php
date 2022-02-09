<?php

namespace App\Ship\Parents\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class mahasiswa extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'mahasiswa';
    
    protected $fillable = [
        'name', 'nip','address'
    ];
}