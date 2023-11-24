<?php

namespace App\Http\Controllers;

use App\Models\Superpoder;
use App\Http\Requests\StoreSuperpoderRequest;
use App\Http\Requests\UpdateSuperpoderRequest;

class SuperpoderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $superpoder = Superpoder::all();
        return $superpoder;
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
    public function store(StoreSuperpoderRequest $request)
    {
        $superpoder = Superpoder::create($request->all());
        return $superpoder;
    }

    /**
     * Display the specified resource.
     */
    public function show(Superpoder $superpoder)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Superpoder $superpoder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSuperpoderRequest $request, Superpoder $superpoder)
    {
        $superpoder->update($request->all());
        return $superpoder;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Superpoder $superpoder)
    {
        $superpoder = Superpoder::findorFail($superpoder);
        $superpoder->delete();
        return $superpoder;

    }
}
