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
                <div class="panel-heading">Edit Profile</div>

                <div class="panel-body">
                <div class="row">
                <div class="container-fluid">
                    <form method="POST" action="{{url('/user/'.\Auth::user()->id.'/update')}}">
                    {{csrf_field()}}
                    <div class="form-group col-md-2">
                    <label for="name">User Name</label>
                    <input type="text" class="form-control" id="name" placeholder="{{\Auth::user()->name}}">
                    </div>
                    <div class="form-group col-md-2">
                    <label for="name">Email Address</label>
                    <input type="text" class="form-control" id="name" placeholder="{{\Auth::user()->email}}">
                    </div>
                    <div class="form-group col-md-2">
                    <label for="name">Password</label>
                    <input type="password" class="form-control" id="name" placeholder="">
                    <input type="password" class="form-control" id="name" placeholder="">
                    </div>
                    
                    </form>
                </div>       
                </div>       

                
                
                
                 <div class="row">
                <div class="container-fluid">
                    <form method="POST" action="{{url('/user/'.\Auth::user()->id.'/profile/update')}}">
                    {{csrf_field()}}
                    <div class="form-group col-md-6">
                        <label for="headline">Headline:</label>
                        <input type="text" class="form-control" id="headline">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="birthdate">Birthdate:</label>
                        <input type="text" class="form-control" id="headline">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="location">Location:</label>
                        <input type="text" class="form-control" id="headline">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" rows="8">
                        </textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="signature">Signature:</label>
                        <textarea class="form-control" id="headline" rows="3">
                        </textarea>
                    </div>
                    </div>
                    <!--'image_id','headline','description','birthdate','location','signature'-->
               
                    </form>
</div>                       
</div>                       
</div>                       
</div>
</div>

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
               <li><a href="{{url('/home')}}">Home</a></li>
<li><a href="{{url('user/'.\Auth::user()->id.'/inbox')}}">Inbox</a></li>
<li><a href="{{url('user/'.\Auth::user()->id.'/outbox')}}">Outbox</a></li>
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
