<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Message as Message;
class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Message::all();
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
     * 'title','body','status','inbox_id','sender_id','receiver_id'
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $message = Message::create([

            'title'=>$request->input('title'),
            'body'=>$request->input('body'),
            'status'=>$request->input('status'),
            'inbox_id'=>$request->input('inbox_id'),
            'sender_id'=>$request->input('sender_id'),
            'receiver_id'=>$request->input('receiver_id')
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
        return Message::find($id);

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

        //cannot edit messages
    }

    /**
     * Remove the (specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Message::delete($id);
    }
    public function viewTemplate($id, $message_id){
        $user = \Auth::user();
        $message = \App\Message::find($message_id);
    //['messages' => $user->inbox]
    
    return view('user/message', ['message' => $message, 'user' => $user]);


    }
}
