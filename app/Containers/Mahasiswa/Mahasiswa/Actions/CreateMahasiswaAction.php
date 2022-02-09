<?php

namespace App\Containers\Mahasiswa\Mahasiswa\Actions;

use App\Containers\Mahasiswa\Mahasiswa\Models\Mahasiswa;
use App\Containers\Mahasiswa\Mahasiswa\Tasks\CreateMahasiswaTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateMahasiswaAction extends Action
{
    public function run(Request $request): Mahasiswa
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateMahasiswaTask::class)->run($data);
    }
}
