<?php

namespace App\Containers\Mahasiswa\Mahasiswa\Actions;

use App\Containers\Mahasiswa\Mahasiswa\Tasks\GetAllMahasiswasTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllMahasiswasAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllMahasiswasTask::class)->addRequestCriteria()->run();
    }
}
