<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactinfo;

class ContactinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.contactinfo.index');
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
        $info = Contactinfo::findOrFail($id);
        return view('admin.contactinfo.edit',compact('info'));
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
        $contactinfo = Contactinfo::findOrFail($id);
        $this->validate($request, [
            'address' => 'required',
            'phone' => 'required',
            'fax' => 'required',
            'email' => 'required',
            'website' => 'required',
        ]);
        
        $contactinfo->address = $request->get('address');
        $contactinfo->phone = $request->get('phone'); 
        $contactinfo->fax = $request->get('fax');
        $contactinfo->email = $request->get('email');
        $contactinfo->website = $request->get('website');
        $contactinfo->save();
        return redirect('/contactinfo')->with('message', 'Designation Update successful!');
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
