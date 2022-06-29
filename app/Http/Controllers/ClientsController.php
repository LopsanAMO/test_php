<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        // $clientimgs = Imgclients::all();

        return view('clientes.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);

        return view('clientes.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        // $clientimgs = Imgclients::all();

        return view('clientes.edit', compact('client'));
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
        $clients = Client::FindOrFail($id);

        if( $request->hasFile('img1') ){
            $img1 = $request->file('img1');
            $name = str_replace(' ','-', $img1->getClientOriginalName());
            $path = 'Images/' . $name;
            Storage::putFileAs('/public/' . 'Images/', $img1, $name );
            $clients::whereId($id)->update([
                'h4' => $request->h4,
                'span' => $request->span,
                'h4_2' => $request->h4_2,
                'client1' => $path,
            ]);
        }
        else{
            $clients->update($request->all());
        }

        return redirect()->route('clientes.index', compact('clients'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id)->delete();

        return back();
    }
}
