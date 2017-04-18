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
Navbars
</div>
<div class="panel-body">
<div class="row">
<div class="col-md-12">
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


    </div>


</div>
