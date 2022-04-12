<?php

namespace App\Http\Controllers;

use App\Models\Quize;
use App\Http\Requests\StoreQuizeRequest;
use App\Http\Requests\UpdateQuizeRequest;

class QuizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * @param  \App\Http\Requests\StoreQuizeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuizeRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quize  $quize
     * @return \Illuminate\Http\Response
     */
    public function show(Quize $quize)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quize  $quize
     * @return \Illuminate\Http\Response
     */
    public function edit(Quize $quize)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuizeRequest  $request
     * @param  \App\Models\Quize  $quize
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuizeRequest $request, Quize $quize)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quize  $quize
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quize $quize)
    {
        //
    }
}
