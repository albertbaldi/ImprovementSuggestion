<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DifficultyController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return Response
     */
   public function index()
   {
    $total = \App\Difficulty::all()->count();
    $rows = \App\Difficulty::paginate(10);

    $showDelete = false;
    return view('difficulty.index')->with(compact('rows', 'total', 'showDelete'));
}

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function onlyTrashed()
    {
        $total = \App\Difficulty::onlyTrashed()->count();
        $rows = \App\Difficulty::onlyTrashed()->paginate(10);

        $showDelete = true;
        return view('difficulty.index')->with(compact('rows', 'total', 'showDelete'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('difficulty.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        \App\Difficulty::create($request->all());

        return redirect()->route('difficulty.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $row = \App\Difficulty::find($id);
        return view('difficulty.edit')->with(compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $row = \App\Difficulty::find($id);
        $row->update($request->all());

        return redirect()->route('difficulty.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
