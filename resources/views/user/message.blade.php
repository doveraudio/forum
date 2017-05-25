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
                <div class="panel-heading">Read Message</div>
                <div class="panel-body">
                <div class="well"
    <ul class="list-inline">                
    <li class="list-inline-item"><strong>Title:</strong> {{$message->title}}</li>
    <li class="list-inline-item"> <strong>Sent:</strong> {{$message->created_at}}</li>
    <li class="list-inline-item"><Strong>Status:</strong> {{$message->status}}</li>
    </ul>
    <ul class="list-inline">
    <li class="list-inline-item" ><strong>Sender:</strong> {{App\User::find($message->sender_id)->email}}    </li>
    <li class="list-inline-item" ><strong>Receiver:</strong> {{App\User::find($message->receiver_id)->email}}  </li>
    </ul>
    <div><strong>Message:</strong>
    <p>{{$message->body}}</p>
    </div>
    </div>
    <div>

<form class="form-horizontal"role="form" method="post" action="{{url('user/'.\Auth::user()->id.'/message/store')}}">
{{ csrf_field() }}
	<div class="form-group">
		<label for="email" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-4">
			<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
		</div>
	</div>
	<div class="form-group">
		<label for="message" class="col-sm-2 control-label">Message</label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="4" name="message"></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<input id="submit" name="submit" type="submit" value="Send Message" class="btn btn-primary">
		</div>
	</div>
	
</form>


    </div>
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
<script type="text/javascript" src="{{ asset('app/message.js')}}" ></script>
<script>
message.init();
</script>
@endsection