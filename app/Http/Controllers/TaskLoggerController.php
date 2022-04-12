<?php

namespace App\Http\Controllers;

use App\Models\TaskLogger;
use App\Http\Requests\StoreTaskLoggerRequest;
use App\Http\Requests\UpdateTaskLoggerRequest;

class TaskLoggerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreTaskLoggerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskLoggerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TaskLogger  $taskLogger
     * @return \Illuminate\Http\Response
     */
    public function show(TaskLogger $taskLogger)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TaskLogger  $taskLogger
     * @return \Illuminate\Http\Response
     */
    public function edit(TaskLogger $taskLogger)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaskLoggerRequest  $request
     * @param  \App\Models\TaskLogger  $taskLogger
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaskLoggerRequest $request, TaskLogger $taskLogger)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TaskLogger  $taskLogger
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaskLogger $taskLogger)
    {
        //
    }
}
