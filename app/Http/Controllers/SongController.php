<?php

namespace App\Http\Controllers;

use App\song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $song = Song::all();
        

        return  view('welcome',compact('song'));
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
        $song = new Song();
        $song->name = $request->name;
        $song->artist = $request->artist;
        $song->save();

        return view ('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\song  $song
     * @return \Illuminate\Http\Response
     */
    public function show(song $song)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\song  $song
     * @return \Illuminate\Http\Response
     */
    public function edit(song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $song = Song::find($id);
        $song->name = $request->name;
        $song->artist = $request->artist;
        $song->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\song  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $song = Song::find($id);
        $song->delete();
    }

    public function display(Song $song)
    {

        $song = Song::all();
        

        return  view('welcome',compact('song'));

    }
}
