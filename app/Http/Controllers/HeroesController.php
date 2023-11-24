<?php

namespace App\Http\Controllers;

use App\Models\Heroes;
use App\Http\Requests\StoreHeroesRequest;
use App\Http\Requests\UpdateHeroesRequest;

class HeroesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function login()
     {


     }

    public function index()
    {
        $heroes = Heroes::all();
        return $heroes;
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
    public function store(StoreHeroesRequest $request)
    {
        $heroes = Heroes::create($request->all());
        return $heroes;
    }

    /**
     * Display the specified resource.
     */
    public function show(Heroes $heroes)
    {
        $heroes = Heroes::findOrFail($heroes);
        return $heroes;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Heroes $heroes)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHeroesRequest $request, Heroes $heroes)
    {
        $heroes->update($request->all());
        return $heroes;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Heroes $heroes)
    {
        $heroes = Heroes::findOrFail($heroes);
        $heroes->delete();
        return $heroes;
    }
}
