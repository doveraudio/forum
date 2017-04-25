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
<form method="POST" action="{{url('/user/'.\Auth::user()->id.'/update')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="text" class="form-control" id="name" placeholder="{{\Auth::user()->name}}">
                    </div>
                    <div class="form-group">
                    <label for="name">Email Address</label>
                    <input type="text" class="form-control" id="name" placeholder="{{\Auth::user()->email}}">
                    </div>
                    <div class="form-group">
                    <label for="name">Password</label>
                    <input type="password" class="form-control" id="name" placeholder="">
                    <input type="password" class="form-control" id="name" placeholder="">
                    </div>
                    </div>
                    </form>
                       

                
                    <form method="POST" action="{{url('/user/'.\Auth::user()->id.'/profile/update')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="headline">Headline:</label>
                        <input type="text" class="form-control" id="headline">
                    </div>
                    <div class="form-group">
                        <label for="headline">Description:</label>
                        <input type="text" class="form-control" id="headline">
                    </div>
                    <div class="form-group">
                        <label for="headline">Birthdate:</label>
                        <input type="text" class="form-control" id="headline">
                    </div>
                    <div class="form-group">
                        <label for="headline">Location:</label>
                        <input type="text" class="form-control" id="headline">
                    </div>
                    <div class="form-group">
                        <label for="headline">Signature:</label>
                        <input type="text" class="form-control" id="headline">
                    </div>
                    'image_id','headline','description','birthdate','location','signature'
                    </div>
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
