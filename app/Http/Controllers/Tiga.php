<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tiga extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return ('Email : <a href="mailto:cs@educastudio.com">cs@educastudio.com</a> <br> Whatsapp : <a href="https://wa.me/6281323844339">0813-2384-4339</a>');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
