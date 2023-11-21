@extends('layouts.app')
@section('content')
    {{-- @include('links.navbar') --}}
    <a class="btn btn-primary mt-3 mb-3" href="{{ route('backend.projects.create') }}" target="blank">Create New Project</a>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Project Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Images</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>

                            <td>{{ $project->project_Name }}</td>
                            <td>{{ $project->description }}</td>

                            <td>
                                <img src="{{ asset('public/image/' . $project->image) }}"
                                    style="height: 80px; width:120px;">
                            </td>
                            <td>
                                <form class="mt-2" action="{{ route('projects.destroy',$project->id) }}" method="POST">

                                    <a class="btn btn-warning" href="{{ route('backend.projects.edit',$project->id) }}"
                                        target="_blank">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
