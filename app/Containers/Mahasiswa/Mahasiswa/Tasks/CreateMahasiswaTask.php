<?php

namespace App\Containers\Mahasiswa\Mahasiswa\Tasks;

use App\Containers\Mahasiswa\Mahasiswa\Data\Repositories\MahasiswaRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateMahasiswaTask extends Task
{
    protected MahasiswaRepository $repository;

    public function __construct(MahasiswaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
