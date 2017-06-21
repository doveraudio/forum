<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     * Resource Properties:
     * 'user_id','image_id','headline','description','birthdate','location','signature'
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Profile::all();
    }

    /**
     * Show the form for creating a new resource.
     * Resource Properties:
     * 'user_id','image_id','headline','description','birthdate','location','signature'
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * Resource Properties:
     * 'user_id','image_id','headline','description','birthdate','location','signature'
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $profile = Profile::create([
        'user_id'       => $request->input('user_id'),
        'image_id'      => $request->input('image_id'),
        'headline'      => $request->input('headline'),
        'description'   => $request->input('description'),
        'birthdate'     => $request->input('birthdate'),
        'location'      => $request->input('location'),
        'signature'     => $request->input('signature')
        ]);
        $profile->save();
    }

    /**
     * Display the specified resource.
     * Resource Properties:
     * 'user_id','image_id','headline','description','birthdate','location','signature'
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //


        return Profile::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     * Resource Properties:
     * 'user_id','image_id','headline','description','birthdate','location','signature'
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        return view('user/editprofile', ['user' => \Auth::user()]);
    }

    /**
     * Update the specified resource in storage.
     * Resource Properties:
     * 'user_id','image_id','headline','description','birthdate','location','signature'
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $profile = \App\Profile::find($id);
        
        $profile->user_id       = $request->input('user_id');
        $profile->image_id      = $request->input('image_id');
        $profile->headline      = $request->input('headline');
        $profile->description   = $request->input('description');
        $profile->birthdate     = $request->input('birthdate');
        $profile->location      = $request->input('location');
        $profile->signature     = $request->input('signature');
        
        $profile->save();


    }

    /**
     * Remove the specified resource from storage.
     * Resource Properties:
     * 'user_id','image_id','headline','description','birthdate','location','signature'
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        Profile::delete($id);
    }
}
