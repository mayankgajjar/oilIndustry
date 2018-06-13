<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Designation;
use Datatables;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$designation = Designation::all()->toArray();
        return view('admin.designation.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.designation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $designation = new Designation([
          'designations_name' => $request->get('name'),
          'designations_status' => $request->get('status'),
        ]);
        $designation->save();
        return redirect('/designation')->with('message', 'Designation Added successful!');
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
        $designation = Designation::findOrFail($id);
        return view('admin.designation.edit',compact('designation'));
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
        $designation = Designation::findOrFail($id);
         $this->validate($request, [
            'name' => 'required',
        ]);
        
        $designation->designations_name = $request->get('name');
        $designation->designations_status = $request->get('status'); 
        $designation->save();
        return redirect('/designation')->with('message', 'Designation Update successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $designation = Designation::findOrFail($id);
        $designation->delete();
        return redirect('/designation')->with('message', 'Designation Delete successful!');
    }
    
   
}
