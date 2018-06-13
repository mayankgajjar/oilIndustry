<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Milestone;

class MilestoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.milestone.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        $milestone = Milestone::findOrFail($id);
        return view('admin.milestone.edit', compact('milestone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $milestone = Milestone::findOrFail($id);
        $this->validate($request, [
            'experience' => 'required',
            'awards' => 'required',
            'workers' => 'required',
            'companies' => 'required',
        ]);

        $milestone->experience = $request->get('experience'); 
        $milestone->awards = $request->get('awards');
        $milestone->workers = $request->get('workers');
        $milestone->companies = $request->get('companies');
        $milestone->save();
        return redirect('/milestone')->with('message', 'Milestone Update successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
