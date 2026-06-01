@extends('layouts.admin')

<x-modal :entity="$type"></x-modal>

@section('content')

    <div class="card shadow-sm">
        
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Type Details</h3>
            <a href="{{route("types.index")}}" class="btn btn-outline-dark">
                <i class="bi bi-chevron-double-left"></i>
                Back to List
            </a>
        </div>
        <div class="card-body">
            <h5>Name:</h5>
            <p class="fw-bold"><big>{{$type->name}}</big></p>
            <hr/>
            <h5>Description:</h5>
            <p>{{$type->description}}</p>
            <hr/>
            <div class="d-flex justify-content-end gap-2">
                <a href="{{route('types.edit', $type)}}" class="btn btn-outline-success" title="Edit"><i class="bi bi-pencil"></i></a>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#m{{$type->id}}" title="Delete"><i class="bi bi-trash"></i></button>   
            </div>         
        </div>
    </div>

@endsection