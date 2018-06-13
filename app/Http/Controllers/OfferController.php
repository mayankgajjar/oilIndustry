<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.offer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.offer.create');
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
        ]);
        
        $offer = new Offer([
          'title' => $request->get('title'),
          'description' => $request->get('description'),
          'icon' => $request->get('icon'),
          'show_status' => $request->get('show_status'),
          'status' => $request->get('status'),
        ]);

        $offer->save();
        return redirect('/offer')->with('message', 'Offer Added successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offer = Offer::findOrFail($id);
        return view('admin.offer.show',compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = Offer::findOrFail($id);
        return view('admin.offer.edit',compact('offer'));
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
        $offer = Offer::findOrFail($id);
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ]);
        
        $offer->title = $request->get('title');
        $offer->description = $request->get('description');
        $offer->icon = $request->get('icon');
        $offer->show_status = $request->get('show_status');
        $offer->status = $request->get('status');
        $offer->save();
       
        return redirect('/offer')->with('message', 'Offer Update successful!');
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
