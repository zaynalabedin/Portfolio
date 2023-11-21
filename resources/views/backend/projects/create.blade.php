@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 mt-3">
            <p class="text-center">PROJECTS</p>
            <div class="card">

                <div class="card-body">

                    <form action="{{ route('project-store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Project Name</label>
                            <input type="textarea" name="project_Name" value="{{ old('project_Name') }}" class="form-control" placeholder="Enter Project Name">
                            <span class="tex-danger">
                                @error('project_Name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Description</label></br>
                            {{-- <textarea name="description" style="width:100%"> --}}
                            <input type="text" name="description" value="{{ old('description') }}" class="form-control" placeholder="Enter Description">
                            {{-- </textarea> --}}

                            <span class="tex-danger">
                                @error('description')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control-file">
                            <span class="tex-danger">
                                @error('image')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
@endsection
