@extends('layouts/app')

@section('content')

<div class="container py-5">
    
    <h1 class="mb-5">Create</h1>

    <form action="{{route('projects.store')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title :</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
              @error('title')
              <div class="invalid-feedback">
                  {{$message}}
              </div>
              @enderror
        </div>
        

        <div class="mb-3">
            <label for="description" class="form-label">Description :</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description')}}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Add a URL for a Thumb :</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{old('thumb')}}">
                @error('thumb')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
        </div>

        <div class="mb-3">
            <label for="url" class="form-label">Add a URL of the project :</label>
            <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url" value="{{old('url')}}">
                @error('url')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
        </div>

        <div class="mb-3">
            <label for="programs" class="form-label">Programs used :</label>
            <input type="text" class="form-control @error('programs') is-invalid @enderror" id="programs" name="programs" value="{{old('programs')}}">
                @error('programs')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
        </div>
        
        


        <div class="col-12">
          <button type="submit" class="btn btn-primary">Add a new project</button>
        </div>
    </form>

@endsection