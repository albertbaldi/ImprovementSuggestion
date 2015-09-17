<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImprovementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $total = \App\Improvement::all()->count();
        $rows = \App\Improvement::orderBy('created_at', 'desc')->paginate(10);

        $showDelete = false;
        return view('improvement.index')->with(compact('rows', 'total', 'showDelete'));
    }

    public function onlyTrashed()
    {
        $total = \App\Improvement::onlyTrashed()->count();
        $rows = \App\Improvement::onlyTrashed()->paginate(10);
        $showDelete = true;
        return view('improvement.index')->with(compact('rows', 'total', 'showDelete'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('improvement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        \App\Improvement::create([
            'product' => $request->input('product'),
            'description' => $request->input('description'),
            'user_id' => \Auth::user()->id,
            'customerSize_id' => $request->input('customerSize_id'),
            'importance_id' => $request->input('importance_id')
            ]);

        return redirect()->route('improvement.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $row = \App\Improvement::find($id);
        return view('improvement.edit')->with(compact('row'));
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
        $row = \App\Improvement::find($id);
        $row->update($request->all());
        
        return redirect()->route('improvement.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $row = \App\Improvement::find($id);
        $row->delete();

        return back();
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function restore($id)
    {
        $row = \App\Improvement::onlyTrashed()->find($id);
        $row->restore();

        return back();
    }
}
