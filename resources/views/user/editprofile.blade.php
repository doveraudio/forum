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
<li><a href="{{url('/inbox')}}">Inbox</a></li>
<li><a href="{{url('/outbox')}}">Outbox</a></li>
<li><a href="{{--route('/profile')--}}">Profile</a></li>
<li><a href="{{--route('/inbox')--}}">All Posts</a></li>

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
                <div class="panel-heading">Edit Profile</div>

                <div class="panel-body">
                    <form method="POST" action="{{url('/user/'.\Auth::user()->id.'/profile/update')}}">
                    {{csrf_field()}}
                    
                    </form>
                       


</div>
</div>
</div>
                        </div>
                       
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
            <div class="container">
            <ul>
@if(Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
@else
                <li>{{Auth::user()->email}}</li>
                <li><a href="{{url('/inbox')}}">Inbox</a></li>
                <li><a href="{{url('/')}}">Profile</a></li>
                <li></li>

@endif
<ul>
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
