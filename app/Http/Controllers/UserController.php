<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Business;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $user = auth()->user();
            $userBusiness = Business::find($user->business_id);

            // $userBusiness = $userBusiness->users()->with('people')->paginate(10);
            $userBusiness = $userBusiness->users()->with('people')->get();

            return response_data($userBusiness, Response::HTTP_OK, 'Datos Leídos correctamente.', true);
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
        //
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
