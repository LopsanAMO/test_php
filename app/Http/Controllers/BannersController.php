<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();

        return view('banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banner = Banner::get();

        return view('banners.create', compact('banner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $banner = Banner::create($request->all());
        $banner = new Banner;

        if( isset($request->banner) ){
            $file = $request->file('banner');
            $name = str_replace(' ','-', $file->getClientOriginalName());
            $path = 'Images/' . $name;
            Storage::putFileAs('/public/' . 'Images/', $file, $name );
            $banner::create([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'banner' => $path,
            ]);
        }

        return redirect()->route('banners.index', compact('banner'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner = Banner::find($id);

        return view('banners.show', compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::find($id);

        return view('banners.edit', compact('banner'));
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
        $banner = Banner::FindOrFail($id);

        if( $request->hasFile('banner') ){
            $file = $request->file('banner');
            $name = str_replace(' ','-', $file->getClientOriginalName());
            $path = 'Images/' . $name;
            Storage::putFileAs('/public/' . 'Images/', $file, $name );
            $banner::whereId($id)->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'banner' => $path,
            ]);
        }
        else{
            $banner->update($request->all());
        }

        return redirect()->route('banners.index', compact('banner'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $baner = Banner::find($id)->delete();

        return back();
    }
}
