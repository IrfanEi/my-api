<?php

namespace App\Containers\Mahasiswa\Mahasiswa\UI\API\Controllers;

use App\Containers\Mahasiswa\Mahasiswa\UI\API\Requests\CreateMahasiswaRequest;
use App\Containers\Mahasiswa\Mahasiswa\UI\API\Requests\DeleteMahasiswaRequest;
use App\Containers\Mahasiswa\Mahasiswa\UI\API\Requests\GetAllMahasiswasRequest;
use App\Containers\Mahasiswa\Mahasiswa\UI\API\Requests\FindMahasiswaByIdRequest;
use App\Containers\Mahasiswa\Mahasiswa\UI\API\Requests\UpdateMahasiswaRequest;
use App\Containers\Mahasiswa\Mahasiswa\UI\API\Transformers\MahasiswaTransformer;
use App\Containers\Mahasiswa\Mahasiswa\Actions\CreateMahasiswaAction;
use App\Containers\Mahasiswa\Mahasiswa\Actions\FindMahasiswaByIdAction;
use App\Containers\Mahasiswa\Mahasiswa\Actions\GetAllMahasiswasAction;
use App\Containers\Mahasiswa\Mahasiswa\Actions\UpdateMahasiswaAction;
use App\Containers\Mahasiswa\Mahasiswa\Actions\DeleteMahasiswaAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
/*public function createMahasiswa(CreateMahasiswaRequest $request): JsonResponse
    {
        $mahasiswa = app(CreateMahasiswaAction::class)->run($request);
        return $this->created($this->transform($mahasiswa, MahasiswaTransformer::class));
    }

    public function findMahasiswaById(FindMahasiswaByIdRequest $request): array
    {
        $mahasiswa = app(FindMahasiswaByIdAction::class)->run($request);
        return $this->transform($mahasiswa, MahasiswaTransformer::class);
    }

    public function getAllMahasiswas(GetAllMahasiswasRequest $request): array
    {
        $mahasiswas = app(GetAllMahasiswasAction::class)->run($request);
        return $this->transform($mahasiswas, MahasiswaTransformer::class);
    }

    public function updateMahasiswa(UpdateMahasiswaRequest $request): array
    {
        $mahasiswa = app(UpdateMahasiswaAction::class)->run($request);
        return $this->transform($mahasiswa, MahasiswaTransformer::class);
    }

    public function deleteMahasiswa(DeleteMahasiswaRequest $request): JsonResponse
    {
        app(DeleteMahasiswaAction::class)->run($request);
        return $this->noContent();
    }*/

    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return response()->json([
        "success" => true,
        "message" => "data mahasiswa",
        "data" => $mahasiswa
        ]);
    }
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
        'name' => 'required',
        'NIP' => 'required',
        'address' => 'required'
        ]);
        if($validator->fails()){
        return $this->sendError('Validation Error.', $validator->errors());       
    }
        $mahasiswa = Mahasiswa::create($input);
        return response()->json([
        "success" => true,
        "message" => "Mahasiswa created successfully.",
        "data" => $mahasiswa
        ]);
    } 
/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
$product = Mahasiswa::find($id);
if (is_null($product)) {
return $this->sendError('Product not found.');
}
return response()->json([
"success" => true,
"message" => "Mahasiswa retrieved successfully.",
"data" => $mahasiswa
]);
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, Mahasiswa $mahasiswa)
{
$input = $request->all();
$validator = Validator::make($input, [
'name' => 'required',
'NIP' => 'required',
'address' => 'required'
]);
if($validator->fails()){
return $this->sendError('Validation Error.', $validator->errors());       
}
$mahasiswa->name = $input['name'];
$mahasiswa->NIP = $input['NIP'];
$mahasiswa->address = $input['address'];
$product->save();
return response()->json([
"success" => true,
"message" => "Mahasiswa updated successfully.",
"data" => $product
]);
}
/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy(Mahasiswa $mahasiswa)
{
$mahasiswa->delete();
return response()->json([
"success" => true,
"message" => "Mahasiswa deleted successfully.",
"data" => $mahasiswa
]);
}
}

