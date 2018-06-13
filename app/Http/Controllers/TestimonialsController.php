<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Testimonials;
use App\Designation;

class TestimonialsController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return view('admin.testimonial.index');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $designation = Designation::where('designations_status', 1)->get()->toArray();
        return view('admin.testimonial.create', compact('designation'));
    }
    
    public function edit($id)
    {
        $testimonials = Testimonials::select(['testimonials.id', 'testimonials.name', 'testimonials.image', 'designations.designations_name', 'testimonials.description', 'testimonials.status', 'testimonials.email'])
                ->join('designations', 'designations.id', '=', 'testimonials.designations')
                ->where('testimonials.id', $id)
                ->first();
        
        return view('admin.testimonial.edit',compact('testimonials'));
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'image' => 'required|max:1024',
            'message' => 'required',
        ]);
        
        $image = $request->file('image');
        $imageName = time().'.'.$request->image->getClientOriginalExtension();           
        $request->image->move(public_path('testimonial_images'), $imageName);
        
        if($request->get('postpage') == 'client')
        {
            $testimonials = new Testimonials([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'image' => $imageName,
                'description' => $request->get('message'),
                'status' => '0',
                'designations' => '4',
            ]);
            $testimonials->save();
            return redirect('/addtestimonial')->with('message', 'Testimonials upload successful!');
        } else {
            $testimonials = new Testimonials([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'image' => $imageName,
                'description' => $request->get('message'),
                'status' => '0',
                'designations' => $request->get('designation'),
            ]);
            $testimonials->save();
            return redirect('/testimonial')->with('message', 'Testimonials upload successful!');
        }
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
        $testimonials = Testimonials::findOrFail($id);
        $testimonials->status = $request->get('status');
        $testimonials->save();
        return redirect('/testimonial')->with('message', 'Testimonials Update successful!');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimonials = Testimonials::select(['testimonials.id', 'testimonials.name', 'testimonials.image', 'designations.designations_name', 'testimonials.description', 'testimonials.status', 'testimonials.email'])
                ->join('designations', 'designations.id', '=', 'testimonials.designations')
                ->where('testimonials.id', $id)
                ->first();
        
        return view('admin.testimonial.show',compact('testimonials'));
    }
}
