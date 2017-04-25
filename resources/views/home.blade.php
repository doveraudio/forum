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
<li>this</li>
<li>is</li>
<li>radio</li>
<li>clash</li>
<li>from</li>
<li>a</li>
<li>pirate</li>
<li>satellite</li>
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
                    
                        <div class="col-md-1">Left</div>
                        <div class="col-md-8">
                        <div class="panel-body">
<div class="row">
<div class="col-md-12">
<ul>
<li>Index</li>
@foreach ($indexes as $index)

<li>{{$index->title}}</li>

<ul>
<li>Forum</li>
    @foreach ($index->forums as $forum)
    <li>{{$forum->title}}</li>
    <ul>
    <li>Topic</li>
        @foreach ($forum->topics as $topic)
    <li>{{$topic->title}}</li>
        <ul>
        <li>Thread</li>
            @foreach ($topic->threads as $thread)
            <li>{{$thread->title}}</li>
                <ul>
                @foreach ($thread->Posts->take(3) as $post)
                    <li>{{$post->body}}</li>
                @endforeach
                </ul>
            @endforeach
        </ul>
        @endforeach
        </ul>    
    @endforeach
    </ul>

@endforeach
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
@foreach(\App\Post::all()->chunk(15)->last() as $post)
<tr>
<td><strong>{{$post->title}}</strong> <u>{{$post->created_at}}</u></td>
</tr>
@endforeach

</table>
</div>
</div>
</div>

</div>
</div>
@endsection


    </div>


</div>
