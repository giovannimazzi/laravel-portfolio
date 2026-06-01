@extends('layouts.admin')

@section('content')

    <div class="card shadow-sm">
        
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Types List</h3>
            <a href="{{route("types.create")}}" class="btn btn-outline-dark">
                <i class="bi bi-plus-circle"></i>
                Add Type
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($types as $type)
                            <tr>
                                <td class="fw-bold">
                                    {{$type->name}}
                                </td>
                                <td>
                                    {{$type->description}}
                                </td>
                                <td>
                                    <a href="{{route('types.show', $type)}}" class="btn btn-outline-primary" title="View Details"><i class="bi bi-eye"></i></a>
                                </td>
                                <td>
                                    <a href="{{route('types.edit', $type)}}" class="btn btn-outline-success" title="Edit"><i class="bi bi-pencil"></i></a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#m{{$type->id}}" title="Delete">
                                            <i class="bi bi-trash"></i></button>    
                                </td>
                            </tr>
                            <x-modal :entity="$type"></x-modal>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection