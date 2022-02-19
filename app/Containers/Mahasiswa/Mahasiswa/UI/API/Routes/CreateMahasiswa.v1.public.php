<?php

/**
 * @apiGroup           Mahasiswa
 * @apiName            createMahasiswa
 *
 * @api                {POST} /v1/mahasiswas Endpoint title here..
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

Route::post('mahasiswas', [Controller::class, 'createMahasiswa'])
       ->name('api_mahasiswa_create_mahasiswa')
       ->middleware(['auth:api']);

