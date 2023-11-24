<?php

namespace App\Http\Controllers;

use App\Models\PoderHeroe;
use App\Http\Requests\StorePoderHeroeRequest;
use App\Http\Requests\UpdatePoderHeroeRequest;
use App\Models\Superpoder;

class PoderHeroeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $poderheroes = PoderHeroe::all();

         return $poderheroes;

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
    public function store(StorePoderHeroeRequest $request)
    {
        $poderheroes = PoderHeroe::create($request->all());
        return $poderheroes;
    }

    /**
     * Display the specified resource.
     */
    public function show(PoderHeroe $poderHeroe)
    {
        $poderHeroe = PoderHeroe::findOrFail($poderHeroe);
        return $poderHeroe;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PoderHeroe $poderHeroe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePoderHeroeRequest $request, PoderHeroe $poderHeroe)
    {
        $poderHeroe->update($request->all());
        return $poderHeroe;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PoderHeroe $poderHeroe)
    {
        $poderHeroe = PoderHeroe::findOrFail($poderHeroe);
        $poderHeroe->delete();
        return $poderHeroe;
    }

}
