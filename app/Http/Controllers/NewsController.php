<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
            'ndate' => 'required',
            'image' => 'required|max:1024',
        ]);
        
        $image = $request->file('image');
        $imageName = time().'.'.$request->image->getClientOriginalExtension();           
        $request->image->move(public_path('news_images'), $imageName);
        
        $news = new News([
          'title' => $request->get('title'),
          'description' => $request->get('description'),
          'image' => $imageName,
          'show_status' => $request->get('show_status'),
          'status' => $request->get('status'),
          'news_date' => date('Y-m-d', strtotime($request->get('ndate')))
        ]);

        $news->save();
        return redirect('/news')->with('message', 'News Added successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::findOrFail($id)->toArray();
        return view('admin.news.show',compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.edit',compact('news'));
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
        $news = News::findOrFail($id);
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'ndate' => 'required',
        ]);
        
        if($request->file('image'))
        {
            unlink(public_path('news_images/'.$news->image));
            $image = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();           
            $request->image->move(public_path('news_images'), $imageName);
        } else {
            $imageName = $news->image;
        }
        
        $news->title = $request->get('title');
        $news->description = $request->get('description');
        $news->image = $imageName;
        $news->show_status = $request->get('show_status');
        $news->status = $request->get('status');
        $news->news_date = date('Y-m-d', strtotime($request->get('ndate')));
        $news->save();
        return redirect('/news')->with('message', 'News Update successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        unlink(public_path('news_images/'.$news->image));
        $news->delete();
        return redirect('/news')->with('message', 'News Delete successful!');
    }
}
