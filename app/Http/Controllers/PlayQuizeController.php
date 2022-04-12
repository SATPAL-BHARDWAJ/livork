<?php

namespace App\Http\Controllers;

use App\Models\PlayQuize;
use App\Http\Requests\StorePlayQuizeRequest;
use App\Http\Requests\UpdatePlayQuizeRequest;
use App\Services\PlayQuizeService;
use Throwable;

class PlayQuizeController extends Controller
{
    use PlayQuizeService;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quizes = $this->getQuizeResources();
        return view('mindQuize', ['quizes' => json_encode($quizes)]);
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
     * @param  \App\Http\Requests\StorePlayQuizeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlayQuizeRequest $request)
    {
        //dd($request->only('ques', 'ans'));
        $quizes = $this->prepareBeforeSave($request->only('ques', 'ans'));
        //dd($quizes);
        try {
            PlayQuize::insert($quizes);
        } catch (Throwable $e) {
            //dd($e);
            return back()->with(['error' => 'Something went wrong!']);
        }

        return back()->with(['success' => 'Successfuly stored the quize!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlayQuize  $playQuize
     * @return \Illuminate\Http\Response
     */
    public function show(PlayQuize $playQuize)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlayQuize  $playQuize
     * @return \Illuminate\Http\Response
     */
    public function edit(PlayQuize $playQuize)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlayQuizeRequest  $request
     * @param  \App\Models\PlayQuize  $playQuize
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlayQuizeRequest $request, PlayQuize $playQuize)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlayQuize  $playQuize
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlayQuize $playQuize)
    {
        //
    }
}
