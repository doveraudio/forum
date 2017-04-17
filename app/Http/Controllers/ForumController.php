<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return App\Forum::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $info = [
            "created_by"=>"user id",
            "title" => "Title of forum",
            "description" => "Long description of forum"
            ];
        return json_encode($info);

    }

    /**
     * Store a newly created resource in storage.
     * Resource Properties:
     * 'index_id','created_by','title','description'
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $forum = Forum::create([
                "created_by" => $request->input("created_by"),
                "title" => $request->input("title"),
                "description" => $request->input("description"),
        ]);
        $forum->save();
        return $forum;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Forum::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
        $forum = Forum::find($id);
        $forum->title = $request->input("title");
        $forum->description = $request->input("description");
        $forum->save();        
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
        Forum::delete($id);


    }
}
