<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Services\TaskService;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Throwable;

class TaskController extends Controller
{
    use TaskService;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = $this->getTaskResources();
        //dd($tasks);
        return view('tasks', ["tasks" => json_encode($tasks)]);
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
     * @param  \App\Http\Requests\StoreTaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskRequest $request)
    {
        $data = $this->prepareBeforeSave($request->toArray());
        try {
            DB::beginTransaction();

            foreach ($data as $t) {
                $filteredTask = Arr::except($t, ['marked']);
                $task = Task::create($filteredTask);
                if (isset($t["marked"]) && $t["marked"] == true) {
                    $task->mark();
                }
            }

            DB::commit();
        } catch (Throwable $e) {
            dd($e);
            DB::rollBack();
            return back()->with(['error' => 'Something went wrong!']);
        }

        return back()->with(['success' => 'Successfuly stored the tasks!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaskRequest  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
