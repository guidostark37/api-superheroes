<?php

namespace App\Http\Controllers;

use App\Models\Mision;
use App\Http\Requests\StoreMisionRequest;
use App\Http\Requests\UpdateMisionRequest;

class MisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mision = Mision::all();

        return response()->json($mision);
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
    public function store(StoreMisionRequest $request)
    {
        $mision = Mision::create($request->all());
        return response()->json($mision);

    }

    /**
     * Display the specified resource.
     */
    public function show(Mision $mision)
    {
        $mision = Mision::findOrFail(  $mision);
        return response()->json($mision);
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
    public function update(UpdateMisionRequest $request, Mision $mision)
    {
        $mision->update($request->all());
        return response()->json($mision);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mision $mision)
    {
        $mision = Mision::findOrFail(  $mision);
        $mision->delete();
        return response()->json(null);
    }
}
