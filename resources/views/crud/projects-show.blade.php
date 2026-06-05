@extends('layouts.admin')

<x-modal :entity="$project"></x-modal>

@section('content')

    <div class="card shadow-sm">
        
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Project Details</h3>
            <a href="{{route("projects.index")}}" class="btn btn-outline-dark">
                <i class="bi bi-chevron-double-left"></i>
                Back to List
            </a>
        </div>
        <div class="card-body">
            @if($project->image)
                <div id="post-image">
                    <img 
                        src="{{ asset("storage/" . $project->image) }}" 
                        alt="{{$project->name}}">
                </div>
            @endif
            <h5>Name:</h5>
            <p class="fw-bold"><big>{{$project->name}}</big></p>
            <hr/>
            <h5>Type:</h5>
            <p class="text-primary fw-semibold"><big>{{$project->type?->name ?? '---'}}</big></p>
            <hr/>
            @if (count($project->technologies) > 0)    
                <h5>Technologies:</h5>
                @foreach ($project->technologies as $technology)
                    <span 
                        class="badge" 
                        style="background-color: {{ $technology->color }}">
                        {{ $technology->name }}
                    </span>
                @endforeach
                <hr/>
            @endif
            <h5>Customer:</h5>
            <p>{{$project->customer}}</p>
            <hr/>
            <h5>Description:</h5>
            <p>{{$project->description}}</p>
            <hr/>
            <h5>Start Date:</h5>
            <p>{{$project->start_date}}</p>
            <hr/>
            <h5>End Date:</h5>
            <p>{{$project->end_date}}</p>
            <hr/>
            <div class="d-flex justify-content-end gap-2">
                <a href="{{route('projects.edit', $project)}}" class="btn btn-outline-success" title="Edit"><i class="bi bi-pencil"></i></a>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#m{{$project->id}}" title="Delete"><i class="bi bi-trash"></i></button>   
            </div>         
        </div>
    </div>

@endsection