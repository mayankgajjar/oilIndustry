<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Introduction;
use File;

class IntroductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.introduction.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $introduction = Introduction::findOrFail($id);
        return view('admin.introduction.show',compact('introduction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $introduction = Introduction::findOrFail($id);
        return view('admin.introduction.edit',compact('introduction'));
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
        $introduction = Introduction::findOrFail($id);
        $this->validate($request, [
            'description' => 'required',
        ]);
        
        $new_img_array = $request->get('old_img');
        $old_img_array = explode(",",$introduction->image);
        $result=array_diff($old_img_array,$new_img_array);
        if(sizeof($result > 0)){
            foreach($result as $remove){
                unlink(public_path('introduction_images/'.$remove));
            }
        }
        
        $image_array=array();
        $image_des_array =array();
        $img_des_array = $request->get('old_img_des');
        $imagelist = $request->file('image');
        if(isset($imagelist)){
            foreach($imagelist as $key=>$img){
                $image = $img;
                $imageName = $key.time().'.'.$img->getClientOriginalExtension();  
                $img->move(public_path('introduction_images'), $imageName);
                array_push($image_array,$imageName);
            }  
        }
        $new_img_array = implode(",",$new_img_array);
        $newimgarray = explode(",",$new_img_array);
        $updat_img_list = array_merge($image_array, $newimgarray);
        $img_string = implode(",",$updat_img_list);
        $img_string = trim($img_string,",");
        
        if(sizeof($request->get('image_description') > 0)){
            $image_des_array = $request->get('image_description');
            $updat_img_des = array_merge($image_des_array,$img_des_array);
        } else {
            $updat_img_des = array_merge($image_des_array,$img_des_array);
        }

        $img_des_string = implode(",",$updat_img_des);
        $img_des_string = trim($img_des_string,",");
        
        $introduction->description = $request->get('description');
        $introduction->image = $img_string;
        $introduction->image_description = $img_des_string;
        $introduction->status = $request->get('status');
        $introduction->save();
       
        return redirect('/introduction')->with('message', 'Introduction Update successful!');
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
