<?php

namespace App\Http\Controllers;

use App\Models\CarUser;
use Illuminate\Http\Request;

class CarUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carsUser = CarUser::orderBy('id', 'desc')->get();

        return view('carUser.index', [
            'carsUser' => $carsUser
        ]);
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
    public function show(CarUser $carUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarUser $carUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarUser $carUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarUser $carUser)
    {
        //
    }
}
