<?php

namespace App\Http\Controllers;

use App\Models\Residents;
use App\Http\Requests\StoreredidentsRequest;
use App\Http\Requests\UpdateredidentsRequest;

class ResidentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $residents = Residents::get();
        
        return view('residents.index', compact('residents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('residents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreResidentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreredidentsRequest $request)
    {
        $residents = new Residents;
        $residents->name= $request->name;
        $residents->address= $request->address;
        $residents->mobile= $request->mobile;
        $residents->save();

        return redirect('/residents');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Residents  $residents
     * @return \Illuminate\Http\Response
     */
    public function show(Residents $residents, $id)
    {
        $resident = $residents->find($id);
        return view('residents.show', compact('resident'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Residents  $residents
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resident = Residents::findOrFail($id);
        
        return view('residents.edit', compact('resident'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateResidentsRequest  $request
     * @param  \App\Models\Residents  $residents
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateredidentsRequest $request, Residents $residents, $id)
    {
        $resident = $residents->findOrFail($id);

        $resident->name = $request->input('name');
        $resident->address = $request->input('address');
        $resident->mobile = $request->input('mobile');
        $resident->save();

        return redirect()->route('residents.index')->with('Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Residents  $residents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Residents $residents, $id)
    {
        $resident = $residents->find($id);
        $resident->delete();
    }
}
