<?php

namespace App\Containers\Mahasiswa\Mahasiswa\Tasks;

use App\Containers\Mahasiswa\Mahasiswa\Data\Repositories\MahasiswaRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateMahasiswaTask extends Task
{
    protected MahasiswaRepository $repository;

    public function __construct(MahasiswaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
