<?php

namespace App\Http\Controllers;

use App\Models\Pelajar;
use Illuminate\Http\Request;

class PelajarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pelajar');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelajar $pelajar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelajar $pelajar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelajar $pelajar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelajar $pelajar)
    {
        //
    }
}
