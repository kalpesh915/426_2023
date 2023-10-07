<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class apicontroller1 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return "Index Function Called";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return "Create Function Called";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return "Store Function Called";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return "Show Function Called";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return "Edit Function Called";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return "Update Function Called";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return "Destroy Function Called";
    }
}
