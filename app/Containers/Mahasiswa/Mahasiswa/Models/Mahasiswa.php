<?php

namespace App\Containers\Mahasiswa\Mahasiswa\Models;

use App\Ship\Parents\Models\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $fillable = [
        'Name',
        'NIP',
        'Address'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Mahasiswa';
}
