<?php

namespace App\Containers\Mahasiswa\Mahasiswa\Actions;

use App\Containers\Mahasiswa\Mahasiswa\Models\Mahasiswa;
use App\Containers\Mahasiswa\Mahasiswa\Tasks\UpdateMahasiswaTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateMahasiswaAction extends Action
{
    public function run(Request $request): Mahasiswa
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateMahasiswaTask::class)->run($request->id, $data);
    }
}
