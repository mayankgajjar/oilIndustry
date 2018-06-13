<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Featuredservices;

class FeaturedservicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.featuredservices.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.featuredservices.create');
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
            'description' => 'required',
            'icon' => 'required',
            'image' => 'required|max:1024',
        ]);
        
        $image = $request->file('image');
        $imageName = time().'.'.$request->image->getClientOriginalExtension();           
        $request->image->move(public_path('featuredservice_images'), $imageName);
        
        $fservice = new Featuredservices([
          'title' => $request->get('title'),
          'description' => $request->get('description'),
          'icon' => $request->get('icon'),
          'image' => $imageName,
          'show_status' => $request->get('show_status'),
          'status' => $request->get('status'),
        ]);

        $fservice->save();
        return redirect('/featuredservices')->with('message', 'Featured Services Added successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fservices = Featuredservices::findOrFail($id)->toArray();
        return view('admin.featuredservices.show',compact('fservices'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fservices = Featuredservices::findOrFail($id);
        return view('admin.featuredservices.edit',compact('fservices'));
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
        $fservices = Featuredservices::findOrFail($id);
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ]);
        
        if($request->file('image'))
        {
            unlink(public_path('featuredservice_images/'.$fservices->image));
            $image = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();           
            $request->image->move(public_path('featuredservice_images'), $imageName);
        } else {
            $imageName = $fservices->image;
        }
        
        $fservices->title = $request->get('title');
        $fservices->description = $request->get('description');
        $fservices->icon = $request->get('icon');
        $fservices->image = $imageName;
        $fservices->show_status = $request->get('show_status');
        $fservices->status = $request->get('status');
        $fservices->save();
       
        return redirect('/featuredservices')->with('message', 'Featured Service Update successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fservices = Featuredservices::findOrFail($id);
        unlink(public_path('gallery_images/'.$fservices->image));
        $fservices->delete();
        return redirect('/featuredservices')->with('message', 'Featured Service Delete successful!');
    }
}
