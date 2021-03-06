<?php

namespace App\Http\Controllers;

use App\Template;
use Illuminate\Http\Request;
use App\Http\Requests\TemplateRequest;
use Illuminate\Support\Facades\Auth;

class TemplateController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $template = Template::latest()->where('created_by', Auth::user()->id);
        $templates = $template->orderBy('id', 'asc')->get();
        return view('template.index', compact('templates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('template.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Template $template, TemplateRequest $request)
    {
        $template->create($request->all())->user()->associate(Auth::user())->save();
        \Session::flash('flash_message', 'Template has been added');
        return redirect()->route('template.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Template $template)
    {
        return view('template.show', compact('template'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Template $template)
    {
        return view('template.edit', compact('template'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Template $template, TemplateRequest $request)
    {
        $template->update($request->all());
        \Session::flash('flash_message', 'Template has been updated');
        return redirect()->route('template.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Template $template)
    {
        $template->delete();
        \Session::flash('flash_message', 'Template has been deleted');
        return redirect()->route('template.index');
    }
}
