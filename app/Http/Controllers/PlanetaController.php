<?php

namespace App\Http\Controllers;

use App\Models\Planeta;
use App\Http\Requests\StorePlanetaRequest;
use App\Http\Requests\UpdatePlanetaRequest;
use Illuminate\Database\Eloquent\Casts\Json;

class PlanetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $planeta = Planeta::all();
        return $planeta;
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
    public function store(StorePlanetaRequest $request)
    {
        $planeta = Planeta::create($request->all());
        return $planeta;
    }

    /**
     * Display the specified resource.
     */
    public function show(Planeta $planeta)
    {
            $planeta = Planeta::findOrFail($planeta);

            return $planeta;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Planeta $planeta)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlanetaRequest $request, Planeta $planeta)
    {
        $planeta->update($request->all());
        return $planeta;
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Planeta $planeta)
    {
        $planeta = Planeta::findOrFail($planeta);
        $planeta->delete();
        return $planeta;
    }
}
