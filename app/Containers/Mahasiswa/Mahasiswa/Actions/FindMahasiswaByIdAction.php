<?php

namespace App\Containers\Mahasiswa\Mahasiswa\Actions;

use App\Containers\Mahasiswa\Mahasiswa\Models\Mahasiswa;
use App\Containers\Mahasiswa\Mahasiswa\Tasks\FindMahasiswaByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindMahasiswaByIdAction extends Action
{
    public function run(Request $request): Mahasiswa
    {
        return app(FindMahasiswaByIdTask::class)->run($request->id);
    }
}
