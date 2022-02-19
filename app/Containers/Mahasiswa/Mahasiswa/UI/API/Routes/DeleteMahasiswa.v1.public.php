<?php

/**
 * @apiGroup           Mahasiswa
 * @apiName            deleteMahasiswa
 *
 * @api                {DELETE} /v1/mahasiswas/:id Endpoint title here..
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

Route::delete('mahasiswas/{id}', [Controller::class, 'deleteMahasiswa']);
   // ->name('api_mahasiswa_delete_mahasiswa');//
    //->middleware(['auth:api']);//

