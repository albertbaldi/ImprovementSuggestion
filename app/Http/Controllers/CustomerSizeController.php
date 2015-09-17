<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CustomerSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $total = \App\CustomerSize::all()->count();
        $rows = \App\CustomerSize::paginate(10);

        $showDelete = false;
        return view('customerSize.index')->with(compact('rows', 'total', 'showDelete'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function onlyTrashed()
    {
        $total = \App\CustomerSize::onlyTrashed()->count();
        $rows = \App\CustomerSize::onlyTrashed()->paginate(10);

        $showDelete = true;
        return view('customerSize.index')->with(compact('rows', 'total', 'showDelete'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('customerSize.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        \App\CustomerSize::create($request->all());

        return redirect()->route('customerSize.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $row = \App\CustomerSize::find($id);
        return view('customerSize.edit')->with(compact('row'));
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
        $row = \App\CustomerSize::find($id);
        $row->update($request->all());
        
        return redirect()->route('customerSize.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $row = \App\CustomerSize::find($id);
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
        $row = \App\CustomerSize::onlyTrashed()->find($id);
        $row->restore();

        return back();
    }
}
