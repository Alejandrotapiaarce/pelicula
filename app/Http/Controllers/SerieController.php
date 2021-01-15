<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Serie::all();
        return view ('admin.serie.index',compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.serie.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = Storage::url(request()->file('file')->store('public'));
        $serie = new Serie ();
        $serie->name = $request->name;
        $serie->image = $url;
        $serie->season = $request->season;
        $serie->language = $request->language;
        $serie->chapter = $request->chapter;
        $serie->premiere = $request->premiere;
        $serie->gender = $request->gender;
        $serie->category_id = $request->category_id;
        $serie->save();
        return redirect()->route('serie.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function show(Serie $serie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function edit(Serie $serie)
    {
        $categories = Category::all();
        return view('admin.serie.edit',compact('categories','serie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serie $serie)
    {
        $serie->name = $request->name;
        $serie->season = $request->season;
        $serie->language = $request->language;
        $serie->chapter = $request->chapter;
        $serie->premiere = $request->premiere;
        $serie->gender = $request->gender;
        $serie->category_id = $request->category_id;
        $serie->update();
        return redirect()->route('serie.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serie $serie)
    {
        $serie->delete();
        return redirect()->route('serie.index');
    }
}
