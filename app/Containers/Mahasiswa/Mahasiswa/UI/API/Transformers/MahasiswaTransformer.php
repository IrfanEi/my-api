<?php

namespace App\Containers\Mahasiswa\Mahasiswa\UI\API\Transformers;

use App\Containers\Mahasiswa\Mahasiswa\Models\Mahasiswa;
use App\Ship\Parents\Transformers\Transformer;

class MahasiswaTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    public function transform(Mahasiswa $mahasiswa): array
    {
        $response = [
            'object' => $mahasiswa->getResourceKey(),
            'id' => $mahasiswa->getHashedKey(),
            'created_at' => $mahasiswa->created_at,
            'updated_at' => $mahasiswa->updated_at,
            'readable_created_at' => $mahasiswa->created_at->diffForHumans(),
            'readable_updated_at' => $mahasiswa->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $mahasiswa->id,
            // 'deleted_at' => $mahasiswa->deleted_at,
        ], $response);
    }
}
