<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.services.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
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
            'note' => 'required',
        ]);
        
        $image = $request->file('image');
        $imageName = time().'.'.$request->image->getClientOriginalExtension();           
        $request->image->move(public_path('service_images'), $imageName);
        
        $service = new Services([
          'title' => $request->get('title'),
          'image' => $imageName,
          'service_status' => $request->get('note'),
          'status' => $request->get('status'),
          'show_status' => $request->get('show_status'),
        ]);
        $service->save();
        return redirect('/services')->with('message', 'Service Added Successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $service = Services::findOrFail($id)->toArray();
        return view('admin.services.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Services::findOrFail($id);
        return view('admin.services.edit',compact('service'));
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
        $service = Services::findOrFail($id);
        $this->validate($request, [
            'title' => 'required',
            'note' => 'required',
        ]);
        
        if($request->file('image'))
        {
            unlink(public_path('service_images/'.$service->image));
            $image = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();           
            $request->image->move(public_path('service_images'), $imageName);
        } else {
            $imageName = $service->image;
        }
        
        $service->title = $request->get('title');
        $service->image = $imageName;
        $service->service_status = $request->get('note');
        $service->status = $request->get('status');
        $service->show_status = $request->get('show_status');
        $service->save();
       
        return redirect('/services')->with('message', 'Service Update Successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Services::findOrFail($id);
        unlink(public_path('service_images/'.$gallery->image_name));
        $service->delete();
        return redirect('/services')->with('message', 'Service Delete successful!');
    }
}
