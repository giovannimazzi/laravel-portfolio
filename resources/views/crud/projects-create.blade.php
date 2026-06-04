@extends('layouts.admin')

@section('content')

    <div class="card shadow-sm">
        
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Create Project</h3>
            <a href="{{route("projects.index")}}" class="btn btn-outline-dark">
                <i class="bi bi-chevron-double-left"></i>
                Back to List
            </a>
        </div>
        <div class="card-body">
            <form action="{{route('projects.store')}}" method="POST">
                @csrf
        
                <div class="mb-3 d-flex flex-column">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label for="type_id">Type:</label>
                    <select name="type_id" id="type_id" class="form-control">
                        <option value="">---</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
                <label for="tech">Technologies:</label>
                <div class="mb-3 d-flex flex-wrap form-control" id="tech">
                    @foreach ($technologies as $technology)
                    <div class="me-3">
                        <input 
                            type="checkbox" 
                            name="technologies[]" 
                            value="{{$technology->id}}" 
                            id="tech-{{$technology->id}}">
                        <label for="tech-{{$technology->id}}">{{ $technology->name }}</label>
                    </div>
                    @endforeach
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label for="customer">Customer:</label>
                    <input type="text" name="customer" id="customer" class="form-control" required>
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" rows="5" class="form-control" required></textarea>
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label for="start_date">Start Date:</label>
                    <input type="date" name="start_date" id="start_date" class="form-control" required>
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label for="end_date">End Date:</label>
                    <input type="date" name="end_date" id="end_date" class="form-control">
                </div>
                <div class="d-flex justify-content-center">
                    <input type="submit" value="Salva" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

@endsection