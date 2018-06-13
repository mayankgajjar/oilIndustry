<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Designation;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$teams = Team::join('designations', 'designations.id', '=', 'teams.emp_designation')
                ->select('teams.id','teams.emp_name', 'designations.designations_name','teams.emp_status')
                ->get()->toArray();*/
        return view('admin.team.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $designation = Designation::where('designations_status', 1)->get()->toArray();
        return view('admin.team.create', compact('designation'));
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
            'image' => 'required|max:1024',
        ]);
        $image = $request->file('image');
        $imageName = time().'.'.$request->image->getClientOriginalExtension();           
        $request->image->move(public_path('team_images'), $imageName);
        
        $team = new Team([
            'emp_name' => $request->get('name'),
            'emp_designation' => $request->get('designation'),
            'emp_facebook_link' => $request->get('facebook'),
            'emp_twitter_link' => $request->get('twitter'),
            'emp_rss_link' => $request->get('rss'),
            'emp_photo' => $imageName,
            'emp_status' => $request->get('status'),
            'emp_show_status' => $request->get('website_status'),
        ]);
        $team->save();
        return redirect('/team')->with('message', 'Team Save successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = Team::join('designations', 'designations.id', '=', 'teams.emp_designation')
                ->where('teams.id', $id)
                ->first()->toArray();
        return view('admin.team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $designation = Designation::all()->toArray();
        $team = Team::findOrFail($id);
        return view('admin.team.edit', compact('designation','team'));
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
        $team = Team::findOrFail($id);
        $this->validate($request, [
            'name' => 'required',
        ]);
        
        if($request->file('image'))
        {
            unlink(public_path('team_images/'.$team->emp_photo));
            $image = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();           
            $request->image->move(public_path('team_images'), $imageName);
        } else {
            $imageName = $team->emp_photo;
        }
        
        $team->emp_name = $request->get('name');
        $team->emp_designation = $request->get('designation');
        $team->emp_facebook_link = $request->get('facebook');
        $team->emp_twitter_link = $request->get('twitter');
        $team->emp_rss_link = $request->get('rss');
        $team->emp_photo = $imageName;
        $team->emp_status = $request->get('status');
        $team->emp_show_status = $request->get('website_status');
        $team->save();
        return redirect('/team')->with('message', 'Team update successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        unlink(public_path('team_images/'.$gallery->image_name));
        $team->delete();
        return redirect('/team')->with('message', 'Team Delete successful!');
    }
}
