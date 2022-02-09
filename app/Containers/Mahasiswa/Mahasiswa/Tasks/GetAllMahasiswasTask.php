<?php

namespace App\Containers\Mahasiswa\Mahasiswa\Tasks;

use App\Containers\Mahasiswa\Mahasiswa\Data\Repositories\MahasiswaRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllMahasiswasTask extends Task
{
    protected MahasiswaRepository $repository;

    public function __construct(MahasiswaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
