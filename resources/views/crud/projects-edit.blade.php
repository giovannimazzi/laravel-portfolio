@extends('layouts.admin')

@section('content')

    <div class="card shadow-sm">
        
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Edit Project</h3>
            <a href="{{route("projects.index")}}" class="btn btn-outline-dark">
                <i class="bi bi-chevron-double-left"></i>
                Back to List
            </a>
        </div>
        <div class="card-body">
            <form action="{{route('projects.update', $project)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3 d-flex flex-column">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$project->name}}">
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label for="customer">Customer:</label>
                    <input type="text" name="customer" id="customer" class="form-control" value="{{$project->customer}}">
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" rows="5" class="form-control">{{$project->description}}</textarea>
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label for="start_date">Start Date:</label>
                    <input type="date" name="start_date" id="start_date" class="form-control" value="{{$project->start_date}}">
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label for="end_date">End Date:</label>
                    <input type="date" name="end_date" id="end_date" class="form-control" value="{{$project->end_date}}">
                </div>
                <div class="d-flex justify-content-center">
                    <input type="submit" value="Salva" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

@endsection