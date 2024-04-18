@extends('layouts/app')

@section('content')

<div class="container py-5">
    
    <h1 class="mb-5">Details</h1>

    <div class="mb-5">
        <div>{{$project->title}}</div>
        <div>{{$project->description}}</div>
        <div>{{$project->url}}</div>
        <div>{{$project->thumb}}</div>
        <div>{{$project->programs}}</div>
    </div>
    
    <div>
        <a href="{{route('projects.index')}}">
            Back to the list
        </a>
    </div>
</div>

@endsection