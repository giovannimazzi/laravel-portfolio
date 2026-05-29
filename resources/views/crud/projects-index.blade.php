@extends('layouts.admin')

@section('content')

    <div class="card shadow-sm">
        
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Projects List</h3>
            <a href="{{route("projects.create")}}" class="btn btn-outline-dark">
                <i class="bi bi-plus-circle"></i>
                Add Project
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Customer</th>
                            <th>Description</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td class="fw-bold">
                                    {{$project->name}}
                                </td>
                                <td>
                                    {{$project->customer}}
                                </td>
                                <td>
                                    {{$project->description}}
                                </td>
                                <td>
                                    {{$project->start_date}}
                                </td>
                                <td>
                                    {{$project->end_date}}
                                </td>
                                <td>
                                    <a href="{{route('projects.show', $project)}}" class="btn btn-outline-primary">View Details</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection