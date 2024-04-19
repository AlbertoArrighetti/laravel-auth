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
    
    <div class="d-flex gap-4 ">
        <a href="{{route('projects.edit', $project->id)}}">
            Edit your project
        </a>
        <a href="{{route('projects.index')}}">
            Back to the list
        </a>
    </div>
</div>

@endsection