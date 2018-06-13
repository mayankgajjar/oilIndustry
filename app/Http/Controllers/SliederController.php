<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slieder;

class SliederController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.slieder.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slieder.create');
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
            'title' => 'required',
            'image' => 'required|max:1024',
            'status' => 'required',
        ]);
        
        $image = $request->file('image');
        $imageName = time().'.'.$request->image->getClientOriginalExtension();           
        $request->image->move(public_path('slieder_images'), $imageName);
        
        $slieder = new Slieder([
          'title' => $request->get('title'),
          'image' => $imageName,
          'status' => $request->get('status'),
        ]);

        $slieder->save();
        return redirect('/slieder')->with('message', 'Slieder added successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slieder = Slieder::findOrFail($id)->toArray();
        return view('admin.slieder.show',compact('slieder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slieder = Slieder::findOrFail($id);
        unlink(public_path('slieder_images/'.$slieder->image));
        $slieder->delete();
        return redirect('/slieder')->with('message', 'Slieder Delete successful!');
    }
}
