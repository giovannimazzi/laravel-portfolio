@extends('layouts.admin')

@section('content')

    <div class="card shadow-sm">
        
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Edit Technology</h3>
            <a href="{{route("technologies.index")}}" class="btn btn-outline-dark">
                <i class="bi bi-chevron-double-left"></i>
                Back to List
            </a>
        </div>
        <div class="card-body">
            <form action="{{route('technologies.update', $technology)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3 d-flex flex-column">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$technology->name}}" required>
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label for="color">Color:</label>
                    <input type="color" name="color" id="color" class="form-control" value="{{$technology->color}}" required>
                </div>
                <div class="d-flex justify-content-center">
                    <input type="submit" value="Salva" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

@endsection