<?php

namespace App\Http\Controllers;

use App\Models\TaskSchedule;
use App\Http\Requests\StoreTaskScheduleRequest;
use App\Http\Requests\UpdateTaskScheduleRequest;

class TaskScheduleController extends Controller
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
     * @param  \App\Http\Requests\StoreTaskScheduleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskScheduleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TaskSchedule  $taskSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(TaskSchedule $taskSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TaskSchedule  $taskSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(TaskSchedule $taskSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaskScheduleRequest  $request
     * @param  \App\Models\TaskSchedule  $taskSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaskScheduleRequest $request, TaskSchedule $taskSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TaskSchedule  $taskSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaskSchedule $taskSchedule)
    {
        //
    }
}
