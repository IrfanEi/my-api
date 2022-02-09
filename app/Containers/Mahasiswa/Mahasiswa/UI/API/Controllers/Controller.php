<?php

namespace App\Containers\Mahasiswa\Mahasiswa\UI\API\Controllers;

use App\Containers\Mahasiswa\Mahasiswa\UI\API\Requests\CreateMahasiswaRequest;
use App\Containers\Mahasiswa\Mahasiswa\UI\API\Requests\DeleteMahasiswaRequest;
use App\Containers\Mahasiswa\Mahasiswa\UI\API\Requests\GetAllMahasiswasRequest;
use App\Containers\Mahasiswa\Mahasiswa\UI\API\Requests\FindMahasiswaByIdRequest;
use App\Containers\Mahasiswa\Mahasiswa\UI\API\Requests\UpdateMahasiswaRequest;
use App\Containers\Mahasiswa\Mahasiswa\UI\API\Transformers\MahasiswaTransformer;
use App\Containers\Mahasiswa\Mahasiswa\Actions\CreateMahasiswaAction;
use App\Containers\Mahasiswa\Mahasiswa\Actions\FindMahasiswaByIdAction;
use App\Containers\Mahasiswa\Mahasiswa\Actions\GetAllMahasiswasAction;
use App\Containers\Mahasiswa\Mahasiswa\Actions\UpdateMahasiswaAction;
use App\Containers\Mahasiswa\Mahasiswa\Actions\DeleteMahasiswaAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createMahasiswa(CreateMahasiswaRequest $request): JsonResponse
    {
        $mahasiswa = app(CreateMahasiswaAction::class)->run($request);
        return $this->created($this->transform($mahasiswa, MahasiswaTransformer::class));
    }

    public function findMahasiswaById(FindMahasiswaByIdRequest $request): array
    {
        $mahasiswa = app(FindMahasiswaByIdAction::class)->run($request);
        return $this->transform($mahasiswa, MahasiswaTransformer::class);
    }

    public function getAllMahasiswas(GetAllMahasiswasRequest $request): array
    {
        $mahasiswas = app(GetAllMahasiswasAction::class)->run($request);
        return $this->transform($mahasiswas, MahasiswaTransformer::class);
    }

    public function updateMahasiswa(UpdateMahasiswaRequest $request): array
    {
        $mahasiswa = app(UpdateMahasiswaAction::class)->run($request);
        return $this->transform($mahasiswa, MahasiswaTransformer::class);
    }

    public function deleteMahasiswa(DeleteMahasiswaRequest $request): JsonResponse
    {
        app(DeleteMahasiswaAction::class)->run($request);
        return $this->noContent();
    }
}
