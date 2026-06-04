@extends('layouts.admin')

@section('content')

    <div class="card shadow-sm">
        
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Technologies List</h3>
            <a href="{{route("technologies.create")}}" class="btn btn-outline-dark">
                <i class="bi bi-plus-circle"></i>
                Add Technology
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Color</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($technologies as $technology)
                            <tr>
                                <td class="fw-bold">
                                    {{$technology->name}}
                                </td>
                                <td>
                                    <span class="badge" style="background-color: {{$technology->color}}">
                                        {{$technology->color}}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{route('technologies.show', $technology)}}" class="btn btn-outline-primary" title="View Details"><i class="bi bi-eye"></i></a>
                                </td>
                                <td>
                                    <a href="{{route('technologies.edit', $technology)}}" class="btn btn-outline-success" title="Edit"><i class="bi bi-pencil"></i></a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#m{{$technology->id}}" title="Delete">
                                            <i class="bi bi-trash"></i></button>    
                                </td>
                            </tr>
                            <x-modal :entity="$technology"></x-modal>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection