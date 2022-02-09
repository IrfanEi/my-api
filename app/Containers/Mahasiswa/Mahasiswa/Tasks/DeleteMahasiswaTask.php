<?php

namespace App\Containers\Mahasiswa\Mahasiswa\Tasks;

use App\Containers\Mahasiswa\Mahasiswa\Data\Repositories\MahasiswaRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteMahasiswaTask extends Task
{
    protected MahasiswaRepository $repository;

    public function __construct(MahasiswaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id): ?int
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
