<?php

namespace App\Http\Controllers;

use App\Models\Apropo;
use Illuminate\Http\Request;

class ApropoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main_page.apropos');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apropo  $apropo
     * @return \Illuminate\Http\Response
     */
    public function show(Apropo $apropo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apropo  $apropo
     * @return \Illuminate\Http\Response
     */
    public function edit(Apropo $apropo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apropo  $apropo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apropo $apropo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apropo  $apropo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apropo $apropo)
    {
        //
    }
}
