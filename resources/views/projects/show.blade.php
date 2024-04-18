@extends('layouts/app')

@section('content')

<div class="container py-5">
    
    <h1>Details</h1>

    <div>{{$project->title}}</div>
    <div>{{$project->description}}</div>
    <div>{{$project->url}}</div>
    <div>{{$project->thumb}}</div>
    <div>{{$project->programs}}</div>
    
</div>

@endsection