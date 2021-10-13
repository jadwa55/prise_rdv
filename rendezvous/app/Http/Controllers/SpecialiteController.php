<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Specialite;
use Illuminate\Http\Request;
// use Illuminate\Support\Str;

class SpecialiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $specialites = Specialite::all();

        return view('specialites.index', [
            'specialites' => $specialites
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('specialites.create')->with('categories',Categories::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name_s' => 'required',
            'category_id' => 'required'
        ]);

        Specialite::create($request->all());

        return redirect()->route('specialites.index')
            ->with('success', 'Specialite created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Specialite  $specialite
     * @return \Illuminate\Http\Response
     */
    public function show(Specialite $specialite)
    {
        return view('specialites.show', compact('specialite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Specialite  $specialite
     * @return \Illuminate\Http\Response
     */
    public function edit(Specialite $specialite)
    {
        return view('specialites.edit', compact('specialite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Specialite  $specialite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Specialite $specialite)
    {
        $request->validate([
            'name_s' => 'required',
            'category_id' => 'required'
        ]);
        $specialite->update($request->all());

        return redirect()->route('specialites.index')
            // ->with('success', 'specialite updated successfully');
            ->with('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Specialite  $specialite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specialite $specialite)
    {
        $specialite->delete();

        return redirect()-> route('specialites.index')
        ->with('success', 'Project deleted successfully');
    }
}
