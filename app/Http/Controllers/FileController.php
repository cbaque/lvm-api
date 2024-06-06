<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Business;
use App\Models\File;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $user = auth()->user();
            $userBusiness = Business::find($user->business_id);

            $filesBusiness = $userBusiness->files()->get();

            return response_data($filesBusiness, Response::HTTP_OK, 'Archivos Leídos correctamente.', true);
        } catch (\Exception $ex) {
            return response_data([], Response::HTTP_BAD_REQUEST, 'Error al procesar la petición');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'description' => 'required',
            ]);

            $user = auth()->user();
            $userBusiness = Business::find($user->business_id);

            $newFile = new File();
            $newFile->business_id = $userBusiness->id;
            $newFile->description = $request->description;
            $newFile->save();

            return response_data($newFile, Response::HTTP_CREATED, 'Archivo creado correctamente.', true);

        } catch (\Exception $ex) {
            return response_data([], Response::HTTP_BAD_REQUEST, 'Error al procesar la petición');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
