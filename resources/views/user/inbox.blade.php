@extends('layouts.app')
<div class="container-fluid">
    <div class="row">

@section('navpanelleft')
<div class="col-md-1">

<div class="panel panel-default">
<div class="panel-heading">
Navbars
</div>
<div class="panel-body">
<div class="row">
<div class="col-md-1">
<ul>
<li><a href="{{url('/home')}}">Home</a></li>
<li><a href="{{url('user/'.\Auth::user()->id.'/inbox')}}">Inbox</a></li>
<li><a href="{{url('user/'.\Auth::user()->id.'/outbox')}}">Outbox</a></li>
<li><a href="{{--route('user/'.\Auth::user()->id.'/profile')--}}">Profile</a></li>
<li><a href="{{--route('user/'.\Auth::user()->id.'/posts')--}}">All Posts</a></li>
</ul>
</div>
</div>
</div>

</div>
</div>
@endsection
@section('content')
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    
                      
<table id="inboxTable" class="table table-condensed table-hover table-striped display">
<thead>
    <tr>
        <th>title:</th>
        <th>date:</th>
        <th>sender:</th>
        <th>status:</th>
    </tr>
</thead>
<tbody>
@foreach ($messages as $message)
<tr>
    <td><a href="{{url('user/'.\Auth::user()->id.'/message/'.$message->id)}}">{{$message->title}}</a></td>
    <td>{{$message->created_at}}</td>
    <td>{{App\User::find($message->sender_id)->email}}</td>
    <td>{{$message->status}}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>

</div>
                        </div>
                        <div class="col-md-1">Right</div>
                    
                </div>
            </div>
        </div>
@endsection
@section('navpanelright')
<div class="col-md-3">

<div class="panel panel-default">
    <div class="panel-heading">
        Member Area
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
@if(Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
@else
                <li>{{Auth::user()->email}}</li>
<li><a href="{{url('/home')}}">Home</a></li>
<li><a href="{{url('user/'.\Auth::user()->id.'/inbox')}}">Inbox</a></li>
<li><a href="{{url('user/'.\Auth::user()->id.'/outbox')}}">Outbox</a></li>
<li><a href="{{--route('user/'.\Auth::user()->id.'/profile')--}}">Profile</a></li>
<li><a href="{{--route('user/'.\Auth::user()->id.'/posts')--}}">All Posts</a></li>

@endif

            </div>
        </div>
    </div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
Latest Posts
</div>
<div class="panel-body">
<div class="row">
<div class="col-md-12">

<table>
<tbody>
@foreach(\App\Post::all()->chunk(15)->last() as $post)
<tr>
<td><strong>{{$post->title}}</strong> <u>{{$post->created_at}}</u></td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>

</div>
</div>
@endsection


    </div>


</div>

@section('appscripts')
<script type="text/javascript" src="{{ asset('app/inbox.js')}}" ></script>
<script>
inbox.init();
</script>
@endsection