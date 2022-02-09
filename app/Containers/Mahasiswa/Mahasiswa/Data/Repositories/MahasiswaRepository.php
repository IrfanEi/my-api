<?php

namespace App\Containers\Mahasiswa\Mahasiswa\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class MahasiswaRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
