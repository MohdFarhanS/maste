<?php

namespace App\Http\Controllers;

use App\Models\Merek;
use Illuminate\Http\Request;

class MerekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mereks=Merek::latest()->get();
        return view('mereks.index', compact('mereks'));    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mereks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);
        Merek::create($request->all());
        return redirect()->route('mereks.index')->with('success', 'Merek Created');
        }

    /**
     * Display the specified resource.
     */
    public function show(Merek $merek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Merek $merek)
    {
        return view('mereks.edit', compact('merek'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Merek $merek)
    {
        $request->validate([
            'name'=>'required',
        ]);
        $merek->update($request->all());
        return redirect()->route('mereks.index')->with('success', 'Merek Updated');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Merek $merek)
    {
        $merek->delete();
        return redirect()->route('mereks.index')->with('success', 'Product Deleted');    
    }
}
