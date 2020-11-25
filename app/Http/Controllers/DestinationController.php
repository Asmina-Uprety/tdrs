<?php

namespace App\Http\Controllers;

use App\Destination;
use Illuminate\Http\Request;
use Auth;
class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $destinations = Destination::paginate(5);
        // return $destinations;
        return view('destination.index',compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('destination.create'); 
    }
       

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return $profile;

        $destination = new Destination;

        $destination->title = $request->title;
        $destination->description = $request->description;
        $destination->difficulty_level = $request->difficulty_level;
        $destination->tentative_budget = $request->tentative_budget;
        $destination->best_season = $request->best_season;
        $destination->type = $request->type;
        $destination->estimated_days = $request->estimated_days;

        

        $imageName = time().'.'.request()->featured_image->getClientOriginalExtension();
        request()->featured_image->move(public_path('images'), $imageName);

        $destination->featured_image = $imageName;

        $destination->save();

        return redirect()->back()->with('status','Destination added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function edit(Destination $destination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destination $destination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination)
    {
        //
    }
}
