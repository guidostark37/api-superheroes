<?php

namespace App\Http\Controllers;

use App\Models\MisionEquipo;
use App\Http\Requests\StoreMisionEquipoRequest;
use App\Http\Requests\UpdateMisionEquipoRequest;

class MisionEquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $misionequipo = MisionEquipo::all();
        return response()->json($misionequipo);
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
    public function store(StoreMisionEquipoRequest $request)
    {
        $misionequipo = MisionEquipo::create($request->all());
        return $misionequipo;
    }

    /**
     * Display the specified resource.
     */
    public function show(MisionEquipo $misionEquipo)
    {
        $misionEquipo = MisionEquipo::findOrFail($misionEquipo);
        return $misionEquipo;
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MisionEquipo $misionEquipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMisionEquipoRequest $request, MisionEquipo $misionEquipo)
    {
        $misionEquipo->update($request->all());
        return $misionEquipo;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MisionEquipo $misionEquipo)
    {
        $misionEquipo = MisionEquipo::findOrFail($misionEquipo);
        $misionEquipo->delete();
        return $misionEquipo;
    }
}
