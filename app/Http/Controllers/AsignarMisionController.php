<?php

namespace App\Http\Controllers;

use App\Models\AsignarMision;
use App\Http\Requests\StoreAsignarMisionRequest;
use App\Http\Requests\UpdateAsignarMisionRequest;
use App\Models\Mision;

class AsignarMisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAsignarMisionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mision $mision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mision $mision)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAsignarMisionRequest $request, Mision $mision)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mision $mision)
    {
        
    }
}
