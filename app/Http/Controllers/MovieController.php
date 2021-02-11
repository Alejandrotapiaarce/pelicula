<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Category;
use App\Models\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies= Movie::all();
        return view('admin.movie.index',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $actors = Actor::all();
        return view('admin.movie.create',compact('categories','actors'));
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
        $movie= new Movie();
        $movie->title =$request->title;
        $movie->gender =$request->gender;
        $movie->language =$request->language;
        $movie->production =$request->production;
        $movie->duration =$request->duration;
        $movie->image = $url;
        $movie->qualification =$request->qualification;
        $movie->premiere =$request->premiere;
        $movie->summary =$request->summary;
        $movie->actor_id =$request->actor_id;
        $movie->category_id =$request->category_id;
        $movie->save();
        return redirect()->route('movie.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        $categories = Category::all();
        $actors = Actor::all();
        return view('admin.movie.edit',compact('categories','actors','movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $movie->title =$request->title;
        $movie->gender =$request->gender;
        $movie->language =$request->language;
        $movie->production =$request->production;
        $movie->duration =$request->duration;
        $movie->qualification =$request->qualification;
        $movie->premiere =$request->premiere;
        $movie->summary =$request->summary;
        $movie->actor_id =$request->actor_id;
        $movie->category_id =$request->category_id;
        $movie->update();
        return redirect()->route('movie.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movie.index');
    }

    public function apiMovies($id)
    {
        return Movie::find($id);
    }

}
