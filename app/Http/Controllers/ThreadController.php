<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Thread as Thread;
class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     * Resource Properties:
     * 'topic_id','title','description','created_by'
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return Thread::all();
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
     * Resource Properties:
     * 'topic_id','title','description','created_by'
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //'topic_id','title','description','created_by'
        $thread = Thread::create([
            'topic_id' => $request->input('topic_id'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'created_by' => $request->input('created_by')
            ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        return Thread::find($id);
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
        $thread = Thread::find($id);
        $thread->topic_id = $request->input('topic_id');
        $thread->title = $request->input('title');
        $thread->description = $request->input('description');
        $thread->created_by = $request->input('created_by');
        
        return $thread;
        
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
        Thread::delete($id);
    }
}
