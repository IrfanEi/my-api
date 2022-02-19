<?php

/**
 * @apiGroup           Mahasiswa
 * @apiName            getAllMahasiswas
 *
 * @api                {GET} /v1/mahasiswas Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

use App\Containers\Mahasiswa\Mahasiswa\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('mahasiswas', [Controller::class, 'getAllMahasiswas'])
    ->name('api_mahasiswa_get_all_mahasiswas');
    //->middleware(['auth:api']);//

