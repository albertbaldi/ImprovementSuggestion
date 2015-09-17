<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImportanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $total = \App\Importance::all()->count();
        $rows = \App\Importance::paginate(10);

        $showDelete = false;
        return view('importance.index')->with(compact('rows', 'total', 'showDelete'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function onlyTrashed()
    {
        $total = \App\Importance::onlyTrashed()->count();
        $rows = \App\Importance::onlyTrashed()->paginate(10);

        $showDelete = true;
        return view('importance.index')->with(compact('rows', 'total', 'showDelete'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('importance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        \App\Importance::create($request->all());

        return redirect()->route('importance.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $row = \App\Importance::find($id);
        return view('importance.edit')->with(compact('row'));
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
        $row = \App\Importance::find($id);
        $row->update($request->all());

        return redirect()->route('importance.index');
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
