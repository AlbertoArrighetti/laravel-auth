@extends('layouts/app')

@section('content')

<div class="container py-5">
    
    <h1 class="mb-5">Edit</h1>

    <form action="{{route('projects.update', $project->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title :</label>
            <input type="text" required class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title') ?? $project->title}}">
              @error('title')
              <div class="invalid-feedback">
                  {{$message}}
              </div>
              @enderror
        </div>
        

        <div class="mb-3">
            <label for="description" class="form-label">Description :</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description') ?? $project->description}}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb URL :</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{old('thumb') ?? $project->thumb}}">
                @error('thumb')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
        </div>

        <div class="mb-3">
            <label for="url" class="form-label">Link to the project :</label>
            <input type="text" required class="form-control @error('url') is-invalid @enderror" id="url" name="url" value="{{old('url') ?? $project->url}}">
                @error('url')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
        </div>

        <div class="mb-3">
            <label for="programs" class="form-label">Programs used :</label>
            <input type="text" required class="form-control @error('programs') is-invalid @enderror" id="programs" name="programs" value="{{old('programs') ?? $project->programs}}">
                @error('programs')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
        </div>
        
        


        <div class="col-12 d-flex justify-content-between ">
          <button type="submit" class="btn btn-primary">Save changes</button>

          <a href="{{route('projects.show', $project->id)}}">Cancel changes</a>
        </div>
    </form>

@endsection