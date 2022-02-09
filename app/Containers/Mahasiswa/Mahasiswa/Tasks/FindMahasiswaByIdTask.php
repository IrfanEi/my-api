<?php

namespace App\Containers\Mahasiswa\Mahasiswa\Tasks;

use App\Containers\Mahasiswa\Mahasiswa\Data\Repositories\MahasiswaRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindMahasiswaByIdTask extends Task
{
    protected MahasiswaRepository $repository;

    public function __construct(MahasiswaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
