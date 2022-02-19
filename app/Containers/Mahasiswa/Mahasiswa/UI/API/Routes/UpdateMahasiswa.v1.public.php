<?php

/**
 * @apiGroup           Mahasiswa
 * @apiName            updateMahasiswa
 *
 * @api                {PATCH} /v1/mahasiswas/:id Endpoint title here..
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

Route::patch('mahasiswas/{id}', [Controller::class, 'updateMahasiswa'])
    ->name('api_mahasiswa_update_mahasiswa');
    //->middleware(['auth:api']);//

