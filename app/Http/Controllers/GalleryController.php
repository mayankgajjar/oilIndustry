<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$gallery = Gallery::paginate(5);
        return view('admin.gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
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
            'image' => 'required|max:1024',
            'status' => 'required',
        ]);
        
        $image = $request->file('image');
        $imageName = time().'.'.$request->image->getClientOriginalExtension();           
        $request->image->move(public_path('gallery_images'), $imageName);
        
        $gallery = new Gallery([
          'title' => $request->get('title'),
          'description' => $request->get('description'),
          'image_name' => $imageName,
          'status' => $request->get('status'),
        ]);

        $gallery->save();
        return redirect('/gallery')->with('message', 'Gallery upload successful!');
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
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.edit',compact('gallery'));
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
        $gallery = Gallery::findOrFail($id);
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);
        
        if($request->file('image'))
        {
            unlink(public_path('gallery_images/'.$gallery->image_name));
            $image = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();           
            $request->image->move(public_path('gallery_images'), $imageName);
        } else {
            $imageName = $gallery->image_name;
        }
        
        $gallery->title = $request->get('title');
        $gallery->description = $request->get('description');
        $gallery->image_name = $imageName;
        $gallery->status = $request->get('status');
        
        $gallery->save();
       
        return redirect('/gallery')->with('message', 'Gallery Update successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        unlink(public_path('gallery_images/'.$gallery->image_name));
        $gallery->delete();
        return redirect('/gallery')->with('message', 'Gallery Delete successful!');
    }
}
