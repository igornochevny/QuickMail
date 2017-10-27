<?php

namespace App\Http\Controllers;

use App\Bunch;
use App\Campaign;
use App\Subscriber;
use Illuminate\Http\Request;
use App\Http\Requests\BunchRequest;
use Illuminate\Support\Facades\Auth;

class BunchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bunch = Bunch::latest()->where('created_by', Auth::user()->id);
        $bunches = $bunch->orderBy('id', 'asc')->get();
        return view('bunch.index', compact('bunches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bunch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Bunch $bunch, BunchRequest $request)
    {
        $bunch->create($request->all())->user()->associate(Auth::user())->save();
        \Session::flash('flash_message', 'Bunch has been added');
        return redirect()->route('bunch.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bunch $bunch)
    {
        return view('bunch.show', compact('bunch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bunch $bunch)
    {
        return view('bunch.edit', compact('bunch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Bunch $bunch, BunchRequest $request)
    {
        $bunch->update($request->all());
        \Session::flash('flash_message', 'Bunch has been updated');
        return redirect()->route('bunch.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bunch $bunch)
    {
        $bunch->delete();
        \Session::flash('flash_message', 'Bunch has been deleted');
        return redirect()->route('bunch.index');
    }
}
