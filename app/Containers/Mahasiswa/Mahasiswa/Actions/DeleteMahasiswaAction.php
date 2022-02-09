<?php

namespace App\Containers\Mahasiswa\Mahasiswa\Actions;

use App\Containers\Mahasiswa\Mahasiswa\Tasks\DeleteMahasiswaTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteMahasiswaAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteMahasiswaTask::class)->run($request->id);
    }
}
