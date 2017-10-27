<?php

namespace App\Http\Controllers;

use App\Bunch;
use App\Subscriber;
use Illuminate\Http\Request;
use App\Http\Requests\SubscriberRequest;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Bunch $bunch, Subscriber $subscriber)
    {
        $subscribers = $bunch->subscribers;
        return view('subscriber.index', compact('subscribers', 'bunch', 'subscriber'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Bunch $bunch)
    {
        return view('subscriber.create',compact('bunch'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubscriberRequest $request, Bunch $bunch)
    {
        $bunch->subscribers()->create($request->all());
       \Session::flash('flash_message', 'Subscriber has been added');
        return redirect()->route('subscriber.index', compact('subscriber','bunch'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bunch $bunch, Subscriber $subscriber)
    {
        return view('subscriber.edit', compact('bunch', 'subscriber'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Bunch $bunch, Subscriber $subscriber, SubscriberRequest $request)
    {
        $subscriber->update($request->all());
        \Session::flash('flash_message', 'Subscriber has been updated');
        return redirect()->route('subscriber.index',compact('bunch','subscriber'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bunch $bunch, Subscriber $subscriber)
    {
        $subscriber->delete();
        \Session::flash('flash_message', 'Subscriber has been deleted');
        return redirect()->route('subscriber.index', compact('bunch','subscriber'));
    }

}
